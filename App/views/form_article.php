<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId=' . $post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>
<form method="post" action="../public/index.php?route=<?= $route; ?>">
    <label for="title">Titre</label><br>
    <input class="form-control" type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')) : ''; ?>"><br>
    <?= isset($errors['title']) ? $errors['title'] : ''; ?>
    <label for="chapo">Chapo</label><br>
    <input class="form-control" type="text" id="chapo" name="chapo" value="<?= isset($post) ? htmlspecialchars($post->get('chapo')) : ''; ?>"><br>
    <?= isset($errors['chapo']) ? $errors['chapo'] : ''; ?>
    <label for="content">Contenu</label><br>
    <textarea class="form-control" id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')) : ''; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?><br>
    <div class="btn-wrapper">
        <input class="btn" type="submit" value="<?= $submit; ?>" id="submit" name="submit">
    </div>
</form>
<br>