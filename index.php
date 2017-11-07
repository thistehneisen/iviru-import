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

$remote_url = 'https://api.ivi.ru/mobileapi/categories/v5/';
$provider = 'ivi';

// do the magic
try {
    $contents = file_get_contents($remote_url);
} catch (Exception $e) {
    die('Unable to retrieve data, exiting: '.$e->getMessage());
}

$contents = json_decode($contents, true);
$contents = $contents['result'];

if (!is_array($contents)) {
    die('Retrieved data is not a valid JSON string, exiting.');
}

$db = new db($database['config'], '_write');
(int)$genres = 0;

foreach ($contents as $catalogue) {
    $db->insert('catalogues', array(
        'title' => $catalogue['title'],
        'title_friendly' => $catalogue['hru'],
        'description' => $catalogue['description'],
        'provider_id' => $catalogue['id'],
        'meta_genres' => json_encode($catalogue['meta_genres'])
    ), true);

    foreach ($catalogue['genres'] as $genre) {
        $db->insert('genres', array(
            'title' => $genre['title'],
            'title_friendly' => $genre['hru'],
            'provider' => $provider,
            'provider_id' => $genre['id'],
            'category_id' => $genre['category_id']
        ), true);

        $genres++;
    }
}

print(strftime('%F %X').': Task finished, '.count($contents).' catalogues with '.($genres).' genres parsed.');
