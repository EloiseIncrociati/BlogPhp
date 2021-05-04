<?php $this->title = "Inscription"; ?>
<h1 class="title-page">Mon blog</h1>
<div class="blog-list col-md-6 shadow mb-5 bg-white rounded">
    <h2 class="title-page">Inscription</h2>
    <form method="post" action="../public/index.php?route=register">
        <label for="pseudo">Pseudo</label><br>
        <input class="form-control" type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : ''; ?>"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        <label for="password">Mot de passe</label><br>
        <input class="form-control" type="password" id="password" name="password"><br>
        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
        <br>
        <div class="btn-wrapper">
            <input class="btn" type="submit" value="Inscription" id="submit" name="submit">
        </div>
    </form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>