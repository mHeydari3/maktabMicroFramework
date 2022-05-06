<?php

require_once __DIR__ . "/../vendor/autoload.php";
// define("ROOT", $_SERVER['DOCUMENT_ROOT']);
use App\core\Application;
use App\app\renderView;
use App\app\Controller;

$app = new Application(__DIR__);
// $app->router->get('/', "Home");
// $app->router->get('/GetAll', "GetAll");
// $app->router->get('/GetByID', 'GetByID');
// $app->router->get('/AddTODO', 'AddTODO');
// $app->router->post('/SendForm', 'SendForm');
// $app->router->post('/Toggle', 'Toggle');
// $app->router->get('/contact', 'contact');
// $app->router->get('/home', 'home');
// $app->router->get('/slm', 'slm');
// $app->router->get('/dalam', 'dalam');


$app->router->get('/home', [Controller::class, 'index']);

$app->router->get('/', function () {
    echo "it is /";
});



$app->run();
