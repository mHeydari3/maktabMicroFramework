<?php

require_once __DIR__ . "/../vendor/autoload.php";
// define("ROOT", $_SERVER['DOCUMENT_ROOT']);
use App\core\Application;

$app = new Application(__DIR__);

$app->router->get('/', "Home");
$app->router->get('/GetAll', "GetAll");
$app->router->get('/GetByID', 'GetByID');
$app->router->get('/AddTODO', 'AddTODO');
$app->router->post('/SendForm', 'SendForm');
$app->router->post('/Toggle', 'Toggle');




$app->run();
