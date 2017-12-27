<?php

// init
require_once '../vendor/db.class.php';
require_once '../config.php';

$db = new db($database['config'], '_read');

$where = array();
foreach ((array)$_GET['filter'] as $key => $filter) {
    if (in_array($key, $allowedFilters) && $filter != null && $filter != 'null') {
        $key = $db->escape($key);
        $filter = $db->escape($filter);
        $where[] = "`{$key}`='$filter'";
    }
}

if (count($where)) {
    $where = join(' AND ', $where);
    $where = ' WHERE ' . $where;
}

if (!empty($_GET['page']) && is_numeric($_GET['page']))
    $limit['offset'] = (floor((int)$_GET['page']) * $perPage);
else
    $limit['offset'] = 0;

if (!empty($_GET['features']) && $_GET['features'] == true)
    $result = $db->getRows("SELECT * FROM %s".$where." ORDER BY `rating` DESC LIMIT %d,%d", $db->table('movies'), 0, $featureCount);
else
    $result = $db->getRows("SELECT * FROM %s".$where." LIMIT %d,%d", $db->table('movies'), $limit['offset'], $perPage);

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

    if ($entry['provider'] == 'ivi')
        $tmpResponse['thumb'] = $jsonData['thumbnails'][0]['path'];
    else if ($entry['provider'] == 'start')
        $tmpResponse['thumb'] = 'https://api.start.ru'.$jsonData['vertical']['image_15x'];
    else if ($entry['provider'] == 'tvzaur')
        $tmpResponse['thumb'] = $jsonData['image_vertical'];

    foreach ($jsonReturnData[$entry['provider']] as $from => $to) {
        if (!empty($jsonData[$from]))
            $tmpResponse[$to] = $jsonData[$from];
    }

    $response[] = $tmpResponse;
}

print(json_encode($response));
