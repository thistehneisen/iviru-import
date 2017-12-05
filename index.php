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
                if ($to === 'key')
                    continue;
                
                $insert[$to] = $genre[$from];
            }

            $db->insert('genres', $insert, true);

            $count++;
        }
    }

    apilog("Task for {$provider} finished, {$count} genres parsed.");

}

apilog("Job finished.");
