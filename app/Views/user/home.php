<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<h2>Page utilisateur</h2>
<p>
  <a href="login/" title="Login">Se connecter</a>
</p>
<p>
  <a href="logout/" title="deconnexion">Se déconnecter</a>
</p>
<p>
  <a href="inscription/" title="inscription">Inscription</a>
</p>
<p>
  <a href="../" title="inscription">Index</a>
</p>
<?php $this->stop('main_content') ?>
