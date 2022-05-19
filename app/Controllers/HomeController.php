<?php

namespace App\app\Controllers;

use App\app\Models\Branches;
use App\core\Controller;
class HomeController extends Controller
{
public function index(){

//todo php date
        // $res = Branches::do()->create([
        //    'name'=>'mmd',
        //    'openingDate'=>`NOW()`,
        // 'city'=>"tehran"        ]);
        /* $res = Branches::do()->find('1');
        var_dump($res);
        die(); */

        // 
        ($this->view)->renderView('home', [
            'name' => 'mohammad',
            'friends' => [
                'ali', 'admid', 'reze'
            ]
        ]);
    }
}