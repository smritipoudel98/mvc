<?php 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require "../app/core/init.php";
DEBUG ? ini_set('display_errors',1): ini_set('display_errors',0);

$app = new App();
$app->loadController();
$_GET['url'] = 'home/edit';
