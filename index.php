<?php

require __DIR__.'./vendor/autoload.php';
require "./libs/permissions.php";
require "./config.php";
require "./router/urls.php";

$match = $router->match();
if ($match === false) {
    require './public/views/not_found.inc.php';
} else {
    list( $controller, $action ) = explode( '@', $match['target'] );
    if ( is_callable(array($controller, $action)) ) {
        call_user_func_array(array($controller,$action), array($match['params'], $_POST));
    } else {
        require './public/views/not_found.inc.php';
    }
}
?>
