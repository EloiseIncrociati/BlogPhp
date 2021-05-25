<?php $this->title = 'Mon profil'; ?>
<h1>Mon Compte</h1>
<p>Bienvenue dans votre espace personnel.</p>
<?= $this->session->show('update_password'); ?>
<section class="blog-section my-5 shadow mb-5 bg-white rounded">
  <h2>Bienvenue, <?= $this->session->get('pseudo'); ?></h2>
  <p>Votre identifiant est le : <?= $this->session->get('id'); ?></p>
  <div class="btn-wrapper">
    <button type="button" class="btn" onclick="window.location.href='index.php?route=updatePassword';">Editer Password</button>
  </div>
  <div class="btn-wrapper">
    <button type="button" class="btn" onclick="window.location.href='index.php?route=deleteAccount';">Supprimer mon compte</button>
  </div>
</section>
<br>
<div class="center  footer">
    <a href="../public/index.php?route=presentation">Retour à l'accueil</a>
    <a href="../public/index.php">Retour au blog</a>
</div>