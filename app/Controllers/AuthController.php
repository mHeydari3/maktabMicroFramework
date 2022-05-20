<?php

namespace App\app\Controllers;

use App\app\Models\Branches;
use App\core\Controller;
use App\app\Models\Users;
use App\app\utility\Redirect;
use App\app\utility\Session;

class AuthController extends Controller
{
    public function register()
    {
                var_dump(Session::get('email'));
                    die('die');
        ($this->view)->renderView('register');
    }


    public function registerHandler()
    {
        extract($_POST);
        //todo find if false:
        $res = Users::do()->create([
            'firstname' =>           $firstname,
            'lastname' =>            $lastname,
            'email' =>               $email,
            'password' =>           $password
        ]);
        //todo res true session init 
        //todo if find true: exit

        if ($res) {
            Redirect::to('/login');
            exit;
        } else {
            Redirect::to('/register');
            exit;
        }
    }

    public function login()
    {
        ($this->view)->renderView('login');
    }

    public function loginHandler()
    {
        extract($_POST);
        $res = Users::do()->find($email, 'email');
        if ($res) {
            if ($res->password == $password) {
                Session::init();
                Session::put('email', $email);
                Redirect::to("/GetAll");
            }
        }
    }
    public function exit()
   
  
      
    {   //Session::destroy();
        // Session::unset("email");
        unset($_SESSION['email']);
        


      Redirect::to("/register");
    }
}