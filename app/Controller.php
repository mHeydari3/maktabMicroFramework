<?php

namespace App\app;
use App\core\View; 
class Controller
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
