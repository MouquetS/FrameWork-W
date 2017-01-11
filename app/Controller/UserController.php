<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;

class UserController extends Controller
{
    public function home()
    {
        $this->show('user/home');
    }

    public function login()
    {
      $userExist ="";
      if(!empty($_GET['pseudo']) && !empty($_GET['password'])) {
      $user = new UsersModel();

      $userExist = $user -> usernameExists($_GET['pseudo']);
    }
    $this->show('user/login',['user' => $userExist]);

    }

    public function logout()
    {
        $this->show('user/logout');
    }

    public function inscription()
    {
        $this->show('user/inscription');
    }
}
