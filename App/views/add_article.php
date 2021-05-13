<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId=' . $post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>
<?php
if ($this->session->get('role') === 'admin') { ?>
    <section class="blog-section my-5 shadow mb-5 bg-white rounded">
        <h2 class="title-page">Ajouter Article</h1>
            <form method="post" action="../public/index.php?route=<?= $route; ?>">
                <label for="title">Titre</label><br>
                <input class="form-control" type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')) : ''; ?>"><br>
                <?= isset($errors['title']) ? $errors['title'] : ''; ?>
                <label for="content">Contenu</label><br>
                <textarea class="form-control" id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')) : ''; ?></textarea><br>
                <?= isset($errors['content']) ? $errors['content'] : ''; ?>
                <div class="btn-wrapper">
                    <input class="btn" type="submit" value="<?= $submit; ?>" id="submit" name="submit">
                </div>
            </form>
    </section>
<?php } else { ?>
    <section class="blog-section my-5 shadow mb-5 bg-white rounded">
        <h2 class="title-page">Ajouter Article</h1>
            <p>
                Vous n'êtes pas connecté ou ne disposez pas des droits pour effectuer cette action.
            </p>
    </section>
<?php } ?>
<br>
<div class="center footer">
    <a href="../public/index.php?route=presentation">Retour à l'accueil</a>
    <a href="../public/index.php">Retour au blog</a>
</div>