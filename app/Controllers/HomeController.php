<?php

namespace App\app\Controllers;
use App\core\View; 
class HomeController
{
public function index(){
        (new View)->renderView('home', [
            'name' => 'mohammad',
            'friends' => [
                'ali', 'admid', 'reze'
            ]
        ]);
    }
}
