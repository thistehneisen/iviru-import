<?php

// init
require_once '../vendor/db.class.php';
require_once '../config.php';

$db = new db($database['config'], '_read');

foreach ((array)$_GET['filter'] as $key => $filter) {
    $filters[$key] = $filter;
}

$result = $db->getRows("SELECT * FROM %s", $db->table('movies'));
$response = array();
foreach ((array)$result as $entry) {
    $tmpResponse = array(
        'title' => $entry['title'],
        'description' => $entry['description'],
        'year' => $entry['year'],
        'country' => $entry['country'],
        'genre_id' => $entry['genre_id'],
        'provider' => $entry['provider']
    );

    $jsonData = json_decode($entry['data'], true);
    foreach ($jsonReturnData[$entry['provider']] as $from => $to) {
        if (!empty($jsonData[$from]))
            $tmpResponse[$to] = $jsonData[$from];
    }

    $response[] = $tmpResponse;
}

print(json_encode($response));
