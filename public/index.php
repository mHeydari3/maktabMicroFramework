<?php

require_once __DIR__ . "/../vendor/autoload.php";
// define("ROOT", $_SERVER['DOCUMENT_ROOT']);
use App\core\Application;

$app = new Application(__DIR__);

$app->router->get('/', "home");


$app->router->get('/contact', 'contact');
$app->router->get('/home', 'home');

$app->run();
