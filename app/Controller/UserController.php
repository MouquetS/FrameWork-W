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
      //variables qui précise si les champs sont bien remplis/mail existant/inscription effectuée
      $errorChamp = true;
      $emailExist = true;
      $inscriptionConfirm = false;

      // vérifie que les champs sont remplis
      if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $errorChamp = false;
        $testmail = new UsersModel();

        // vérifie si l'adresse mail indiquée est déjà existante.
        if(!$testmail->emailExists($_POST['email'])) {
            $emailExist = false;
            $user = new UserModel();
            $userData = $user -> inscription();
            // récupère la confirmation de la création en BDD de l'utilisateur
            $flag = $user->insert($userData, true);
            if($flag) {
              $inscriptionConfirm = true;
            }
        }
      }
      $this -> show('user/inscription',["confirm" => $inscriptionConfirm,"error" => $errorChamp,"mail" => $emailExist]);
    }
}
