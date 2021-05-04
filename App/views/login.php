<?php $this->title = "Connexion"; ?>
<h1 class="title-page">Mon blog</h1>
<?= $this->session->show('error_login'); ?>
<div class="blog-list col-md-6 shadow mb-5 bg-white rounded">
    <h2 class="title-page">Connexion</h2>

    <form method="post" action="../public/index.php?route=login">
        <label for="pseudo">Pseudo</label><br>
        <input class="form-control" type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : ''; ?>"><br>
        <label for="password">Mot de passe</label><br>
        <input class="form-control" type="password" id="password" name="password"><br>
        <br>
        <div class="btn-wrapper">
            <input class="btn" type="submit" value="Connexion" id="submit" name="submit">
        </div>
    </form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>