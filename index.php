<?php

// init
require_once 'vendor/db.class.php';

// configuration
$database['hostname'] = 'localhost';
$database['username'] = 'root';
$database['password'] = 'secret';
$database['database'] = 'tvdom';

$database['config'] = array (
	array ('host' => $database['hostname'], 'db' => $database['database'], 'prefix' => NULL, 'user' => $database['username'], 'password' => $database['password'])
);

$providers = array(
    'ivi' => 'https://api.ivi.ru/mobileapi/categories/v5/',
    'tvzaur' => 'http://api.tvzavr.ru/api/3.0/catalog/list_filters?plf=tdm&type=genre',
    'start' => 'https://api.start.ru/web/genres?apikey=12fc4c5e5b2640b1995f6468b6a11deb'
);

$data = array(
    'ivi' => array(
        'key' => 'genres',
        'movies' => 'https://api.ivi.ru/mobileapi/catalogue/v5/?genre={id}',
        'title' => 'title',
        'title_friendly' => 'hru',
        'provider_id' => 'id'
    ),
    'tvzaur' => array(
        'key' => 'catalog_list_filters',
        'title' => 'mark__name',
        'provider_id' => 'mark__id'
    ),
    'start' => array(
        'key' => NULL,
        'movies' => 'https://api.start.ru/web/genres/{id}?apikey=12fc4c5e5b2640b1995f6468b6a11deb',
        'title' => 'title',
        'provider_id' => '_id',
        'title_friendly' => 'url'
    )
);

// functions
function apilog($message) { print(strftime('%F %X').": {$message}\r\n"); }

// preparation
$db = new db($database['config'], '_write');

// do the magic
foreach ($providers as $provider => $remote_url) {

    try {
        $contents = file_get_contents($remote_url);
        
        if ($contents === false) {
            apilog("Unable to retrieve data for {$provider}, skipping.");
            continue;
        }
    } catch (Exception $e) {
        apilog("Unable to retrieve data for {$provider}, skipping. ".$e->getMessage());
        continue;
    }

    $contents = json_decode($contents, true);
    $contents = !empty($contents['result']) ? $contents['result'] : $contents;

    if (!is_array($contents)) {
        apilog("Retrieved data for {$provider} is not a valid JSON string, skipping.");
        continue;
    }

    if ($data[$provider]['key'] !== NULL) {
        (array)$records = array_column($contents, $data[$provider]['key']);

        if (!count($records))
            $records = array($contents[$data[$provider]['key']]);
    } else {
        $records = array($contents);
    }
    
    (int)$count = 0;

    foreach ($records as $genres) {
        foreach ($genres as $genre) {
            $insert = array('provider' => $provider);
        
            foreach ($data[$provider] as $to => $from) {
                if ($to === 'key' || $to === 'movies')
                    continue;
                
                $insert[$to] = $genre[$from];
            }

            $db->insert('genres', $insert, true);
            $count++;

            if (!empty($data[$provider]['movies'])) {
                $url = str_replace('{id}', $insert['provider_id'], $data[$provider]['movies']);
                try {
                    $contents = file_get_contents($url);
                    
                    if ($contents === false) {
                        apilog("Unable to retrieve movies for {$provider} on genre ID {$insert['provider_id']} at {$url}, skipping.");
                        continue;
                    }
                } catch (Exception $e) {
                    apilog("Unable to retrieve movies for {$provider} on genre ID {$insert['provider_id']} at {$url}, skipping. ".$e->getMessage());
                    continue;
                }

                $contents = json_decode($contents, true);
                $contents = !empty($contents['result']) ? $contents['result'] : $contents;
            
                if (!is_array($contents)) {
                    apilog("Retrieved movie data for {$provider} on genre ID {$insert['provider_id']} at {$url} is not a valid JSON string, skipping.");
                    continue;
                }

                $db->insert('movies', array(
                    'provider' => $provider,
                    'genre_id' => $insert['provider_id'],
                    'data' => json_encode($contents)
                ), true);
            }
        }
    }

    apilog("Task for {$provider} finished, {$count} genres parsed.");

}

apilog("Job finished.");
