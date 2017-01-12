<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<h2>Login</h2>

<!-- Avec mon modèle -->
<?php /* if(!$connecte) {
  if($_REQUEST&&$_POST['submit_form']) echo ('Mauvais identifiants');
*/
     ?>

<!-- Modèle existant -->

<?php if(!$_SESSION) { ?>
<form action="" method="post">
  <p>
    <label for="pseudo">Pseudo :</label>
    <input type="text" id="pseudo" name="pseudo" value="">
  </p>
  <p>
    <label for="password">Password :</label>
    <input type="password" id="password" name="password" value="">
  </p>
  <input type="submit" name="submit_form" value="Entrer">
</form>
<?php
} else { ?>
  <p> Vous êtes connecté ! </p>
  <p> <a href="../../" title="Menu principal">Index</a></p>


<?php } ?>
<?php /* } else { ?>
  <p>
    Vous êtes connecté !
  </p>

  <?php } */?>
<?php $this->stop('main_content') ?>
