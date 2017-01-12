<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<h2>Page utilisateur</h2>
<?php if(!$_SESSION) { ?>
<p>
  <a href="login/" title="Login">Se connecter</a>
</p>
<p>
  <a href="inscription/" title="inscription">Inscription</a>
</p>
<?php } else { ?>
<p>
  <a href="logout/" title="deconnexion">Se déconnecter</a>
</p>
<?php } ?>
<p>
  <a href="../" title="inscription">Index</a>
</p>
<?php $this->stop('main_content') ?>
