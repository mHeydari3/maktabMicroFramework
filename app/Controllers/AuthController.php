<?php

namespace App\app\Controllers;

use App\app\Models\Branches;
use App\core\Controller;
use App\app\Models\Users;
use App\app\utility\Redirect;
class AuthController extends Controller
{
    public function register(){

        ($this->view)->renderView('register');
    }


    public function registerHandler(){
        extract($_POST);

        $res = Users::do()->create([
            'firstname' =>           $firstname,
            'lastname' =>            $lastname,
            'email' =>               $email,
            'password' =>           $password
            ]);

        if ($res){
            Redirect::to('/login');
            exit;
        }
        else{
            Redirect::to('/register');
            exit;
        }
    }

    public function login(){
        ($this->view)->renderView('login');
    }

    public function loginHandler(){
        extract($_POST);
        $res = Users::do()->find($email , 'email') ;
        if ($res ){
            if ($res->password == $password){
                // TODO :: set session
                var_dump('LOGIN OK');die();
            }
        }
    }


}



