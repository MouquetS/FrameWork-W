<?php

namespace Model;

use \W\Model;
use \W\Model\ConnectionModel;
use \W\Security\AuthentificationModel;


class UserModel extends \W\Model\Model
{

  public function inscription() {

    $mdp = new AuthentificationModel();

    $userData = array(
      "lastname" => $_POST['nom'],
      "firstname" => $_POST['prenom'],
      "pseudo" => $_POST['pseudo'],
      "email" => $_POST['email'],
      "password" => $mdp->hashPassword($_POST['password'])
    );

    return $userData;
  }
}
