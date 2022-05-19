<?php

require_once __DIR__ . "/../vendor/autoload.php";
// define("ROOT", $_SERVER['DOCUMENT_ROOT']);
use App\core\Application;
use App\app\renderView;
use App\app\Controllers\HomeController;
use App\app\Controllers\TodoController;

$app = new Application(__DIR__);

$app->router->get('/home', [HomeController::class, 'index']);
$app->router->get('/', [HomeController::class, 'index']);

$app->router->get('/GetAll', [TodoController::class, 'GetAll']);
$app->router->get('/GetByID', [TodoController::class, 'GetByID']);
$app->router->post('/GetByID' , [TodoController::class , 'GetByID_Post']);
$app->router->get('/GetByIDG', [TodoController::class, 'GetByID_Get']);
$app->router->get('/AddTODO', [TodoController::class, 'AddTODO']);
$app->router->post('/SendForm', [TodoController::class, 'SendForm']);
$app->router->post('/Toggle', [TodoController::class, 'Toggle']);

$app->router->get('/delete', [TodoController::class, 'delete']);
// $app->router->delete('/delete', [TodoController::class, 'delete']);
$app->router->get('/edit', [TodoController::class, 'edit']);
$app->router->post('/edit', [TodoController::class, 'submitEdit']);
$app->router->post('/update', [TodoController::class, 'update']);
// $app->router->put('/update', [TodoController::class, 'submitEdit']);




/*  $app->router->get('/contact', 'contact');
 $app->router->get('/home', 'home');
 $app->router->get('/slm', 'slm');
 $app->router->get('/dalam', 'dalam');
 */




$app->run();