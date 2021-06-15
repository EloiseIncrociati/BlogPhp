<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId=' . $post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>
<form method="post" action="../public/index.php?route=<?= $route; ?>">
    <label for="title">Titre</label><br>
    <input class="form-control" type="text" id="title" name="title" value="<?= htmlspecialchars(isset($post) ? $post->get('title') : ''); ?>"><br>
    <?= htmlspecialchars(isset($errors['title']) ? $errors['title'] : ''); ?>
    <label for="chapo">Chapo</label><br>
    <input class="form-control" type="text" id="chapo" name="chapo" value="<?= htmlspecialchars(isset($post) ? $post->get('chapo') : ''); ?>"><br>
    <?= htmlspecialchars(isset($errors['chapo']) ? $errors['chapo'] : ''); ?>
    <label for="content">Contenu</label><br>
    <textarea class="form-control" id="content" name="content"><?= htmlspecialchars(isset($post) ? $post->get('content') : ''); ?></textarea><br>
    <?= htmlspecialchars(isset($errors['content']) ? $errors['content'] : ''); ?><br>
    <div class="btn-wrapper">
        <input class="btn" type="submit" value="<?= $submit; ?>" id="submit" name="submit">
    </div>
</form>
<br>