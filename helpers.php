<?php

function getThumb($provider, $jsonData) {
    if ($provider == 'ivi')
        return $jsonData['thumbnails'][0]['path'];
    else if ($provider == 'start')
        return 'https://api.start.ru'.$jsonData['vertical']['image_15x'];
    else if ($provider == 'tvzaur')
        return "http://cdn.tvzavr.ru/common/tvzstatic/cache/292x452/{$jsonData['clip__id']}.jpg";
}

function convertData($provider, $jsonData) {
    global $jsonReturnData;
    $response = array();

    foreach ($jsonReturnData[$provider] as $from => $to) {
        if (!empty($jsonData[$from]))
            $response[$to] = $jsonData[$from];
    }

    return $response;
}
