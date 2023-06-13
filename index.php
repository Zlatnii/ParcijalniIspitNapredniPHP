<?php

require_once 'vendor/autoload.php';

use App\Singletone;
use App\Klasa;

$config = include('src/config.php');

$class = new Klasa($config);
$config = $class->getConfig();
$db = Singletone::getInstance($config);
$dbConnection = $db->getConnection();



var_dump($dbConnection);

?>