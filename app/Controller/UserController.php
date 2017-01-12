<?php

namespace Controller;

use \W\Controller\Controller;
use Model\UserModel;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;


class UserController extends \W\Controller\Controller
{
    public function home()
    {
        $this->show('user/home');
    }

    public function login()
    {

      /*
      $connecte = false;
      if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {
        $user = new UserModel();
        $userExist = $user -> loginUser($_POST['pseudo'],$_POST['password']);

        if($userExist) {
          $_SESSION['user']['id'] = $userExist['id'];
          $connecte = true;
        }
      }
      $this->show('user/login',['connecte' => $connecte]);
      */


      if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {

        //instancie class pour vérifier mot de passe et pseudo
        $user = new AuthentificationModel();
        $userExist = $user -> isValidLoginInfo($_POST['pseudo'], $_POST['password']);

        // L'utilisateur existe en BDD
        if($userExist!= 0) {
          $userConnect = new UsersModel();
          $user2 = $userConnect -> getUserByUsernameOrEmail($_POST['pseudo']);
          $userData = array(
            "id" => $user2['id'],
            "lastname" => $user2['lastname'],
            "firstname" => $user2['firstname'],
            "pseudo" => $user2['pseudo'],
            "email" => $user2['email']
          );
           $user->logUserIn($userData);
        }
      }
      $this->show('user/login');
    }

    public function logout()
    {
      $user = new AuthentificationModel();
      $user->logUserOut();
      $this->show('user/logout');
    }

    public function inscription()
    {
        $this->show('user/inscription');
    }
}
