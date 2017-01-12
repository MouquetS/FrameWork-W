<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<?php if(!$_SESSION) { ?>
<h2>Inscription</h2>
<form method="post">
  <p>
    <label>Nom :</label>
    <input type="text" name="nom" value="">
  </p>
  <p>
    <label>Prénom :</label>
    <input type="text" name="prenom" value="">
  </p>
  <p>
    <label>Pseudo :</label>
    <input type="text" name="pseudo" value="">
  </p>
  <p>
    <label>E-mail :</label>
    <input type="mail" name="email" value="">
  </p>
  <p>
    <label>Mot de passe :</label>
    <input type="password" name="password" value="">
  </p>
</form>


<?php } else {
header('Location: ../../');

 } ?>
<?php $this->stop('main_content') ?>
