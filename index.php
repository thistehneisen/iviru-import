<?php

// init
require_once 'vendor/db.class.php';
require_once 'config.php';

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

                $items = ($provider == 'ivi' ? $contents : ($provider == 'tvzaur' ? $contents['video_list'] : $contents['items'][0]['items']));

                foreach ($items as $item) {
                    $db->insert('movies', array(
                        'provider' => $provider,
                        'provider_id' => ($provider == 'start' ? $item['_id'] : ($provider == 'ivi' ? $item['id'] : $item['clip__id'])),
                        'genre_id' => $insert['provider_id'],
                        'title' => ($provider == 'tvzaur' ? $item['clip__name'] : $item['title']),
                        'description' => ($provider == 'tvzaur' ? $item['clip__description'] : $item['description']),
                        'year' => ($provider == 'tvzaur' ? $item['years'][0]['mark__name'] : (!empty($item['year']) ? $item['year'] : NULL)),
                        'country' => ($provider == 'tvzaur' ? (!empty($item['countries'][0]['mark__name']) ? $item['countries'][0]['mark__name'] : NULL) : (!empty($item['country']) ? $item['country'] : NULL)),
                        'data' => json_encode($item)
                    ), true);
                }
            }
        }
    }

    apilog("Task for {$provider} finished, {$count} genres parsed.");

}

apilog("Job finished.");
