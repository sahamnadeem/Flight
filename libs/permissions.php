<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: *");
$_POST = array_merge($_POST, (array) json_decode(file_get_contents('php://input')));