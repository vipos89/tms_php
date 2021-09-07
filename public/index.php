<?php

include_once __DIR__."/../vendor/autoload.php";
include_once __DIR__."/../app/functions.php";

use App\Controllers\CatalogController;
use App\Controllers\HomeController;


$routes = [
    '/catalog/(\d+)' => [CatalogController::class, 'showProduct'],
    '/catalog' =>[CatalogController::class, 'index'],
    '/contacts' => [HomeController::class, 'contacts'],
    '/' => [HomeController::class, 'index'],
];


$url = (explode('?', $_SERVER['REQUEST_URI']))[0];

foreach ($routes as $route => $item){
    $route = str_replace('/', '\/', $route);
    preg_match('/^'.$route.'$/', $url, $matches);
    if (!empty($matches)){
        $controller = new $item[0];
        $controller->{$item[1]}();
        break;
    }
}

\App\Core\DB::getConnection();
\App\Models\Page::finById(1);


if(empty($matches)){
    echo "404";
}







