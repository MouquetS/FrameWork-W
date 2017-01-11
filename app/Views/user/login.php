<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<h2>Login</h2>
<?php var_dump($user) ?>
<form action="">
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
<?php $this->stop('main_content') ?>
