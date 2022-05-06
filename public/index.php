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



<<<<<<< HEAD
=======
$app->router->get('/contact', 'contact');
$app->router->get('/home', 'home');
$app->router->get('/slm', 'slm');
$app->router->get('/dalam', 'dalam');

>>>>>>> 3a0dcbf1028b78440e7e57a7f3a72d2da01a8ea4

$app->run();
