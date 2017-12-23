<?php
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
        'movies' => 'http://api.tvzavr.ru/api/3.0/catalog/get?limit=100&offset=0&plf=tdm&cats={id}',
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

$jsonReturnData = array(
    'ivi' => array(
        //'thumbnails[0]["path"]' => 'thumb',
        'imdb_rating' => 'imdb_rating',
        'kp_rating' => 'kp_rating'
    ),
    'start' => array(
        //'vertical["image_15x"]' => 'thumb',
        'rating_imdb' => 'imdb_rating',
        'rating_kp' => 'kp_rating'
    ),
    'tvzaur' => array(
        'clip__imdb_rate' => 'imdb_rating',
        'clip__kp_rate' => 'kp_rating'
    )
);

$allowedFilters = array('provider', 'year', 'country', 'genre');

$perPage        = 15;
$noImageSrc     = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';