<?php

// init
require_once '../vendor/db.class.php';
require_once '../config.php';

$db = new db($database['config'], '_read');

foreach ((array)$_GET['filter'] as $key => $filter) {
    $filters[$key] = $filter;
}

$result = $db->getRows("SELECT * FROM %s");
$response = array();
foreach ((array)$result as $entry) {
    if ($entry['provider'] == 'ivi') {
        $response[] = array(

        );
    } else if ($entry['provider'] == 'start') {
        $response[] = array(

        );
    }
}

print_r(json_encode($response), true);
