<?php

namespace Model;

use \W\Model;
use \W\Model\ConnectionModel;


class UserModel extends \W\Model\Model
{
/*
  public function loginUser($pseudo,$mdp) {

    $app = getApp();
    $sql = 'SELECT * FROM ' . $this->table .
         ' WHERE pseudo' . $app->getConfig('security_name_property') . ' = :name' .
         ' AND ' . $app->getConfig('security_password_property') . ' = :password';
    $dbh = ConnectionModel::getDbh();
    $sth = $dbh->prepare($sql);
    $sth->bindValue(':name', $pseudo);
    $sth->bindValue(':password', $mdp);

    if($sth->execute()){
      $foundUser = $sth->fetch();
      if($foundUser){
        return $foundUser;
      }
    }
  }

  */
}
