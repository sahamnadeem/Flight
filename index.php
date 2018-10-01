<?php

require __DIR__.'./vendor/autoload.php';
include "./libs/permissions.php";
include "./config.php";

$router = new AltoRouter();
$router->setBasePath('');

$router->map('GET','/', 'HomeController#index', 'home');
$router->map('GET','/test', 'HomeController#example', 'example');

$match = $router->match();





if ($match === false) {
    require './public/views/not_found.inc.php';
} else {
    list( $controller, $action ) = explode( '#', $match['target'] );
    if ( is_callable(array($controller, $action)) ) {
        call_user_func_array(array($controller,$action), array($match['params']));
    } else {
        require './public/views/not_found.inc.php';
    }
}
?>
