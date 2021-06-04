<?php $this->title = 'Modifier mot mot de passe'; ?>
<h1>Edition Password</h1>
<section class="blog-section my-5 shadow mb-5 bg-white rounded">
    <p>Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
    <form method="post" action="../public/index.php?route=updatePassword">
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <div class="btn-wrapper">
            <input class="btn" type="submit" value="Mettre à jour" id="submit" name="submit">
        </div>
    </form>
</section>
<br>
<div class="center footer">
    <a href="../public/index.php?route=presentation">Retour à l'accueil</a>
    <a href="../public/index.php">Retour au blog</a>
</div>