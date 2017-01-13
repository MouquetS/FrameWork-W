<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<?php if(!$_SESSION) {
  if(!$confirm) { ?>

<h2>Inscription</h2>
<?php if($error && isset($_POST['inscription_submit'])) { ?>
  <p>
    Les champs n'ont pas été remplis correctement.
  </p>

<?php } else if ($mail && isset($_POST['inscription_submit'])) { ?>

<p>
  Ce compte est déjà existant
</p>

<?php }  ?>


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
  <p>
    <input type="submit" name="inscription_submit" value="S'inscrire">
  </p>
</form>


<?php } else { ?>
<p>
  Bravo, Vous venez de vous inscrire.
</p>

<?php } } else {
header('Location: ../../');

 } ?>
<?php $this->stop('main_content') ?>
