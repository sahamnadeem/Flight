<?php

$router = new AltoRouter();
$router->setBasePath('');

$router->map('GET','/', 'HomeController@index', 'home');
$router->map('GET','/post', 'HomeController@index', 'get_post');
$router->map('GET','/test', 'HomeController@example', 'test');