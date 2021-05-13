<?php $this->title = 'Article'; ?>
<h1>Mon blog - Article</h1>
<section class="blog-section my-5 shadow mb-5 bg-white rounded">
    <div>
        <h2><?= htmlspecialchars($article->getTitle()); ?></h2>
        <p><?= htmlspecialchars($article->getContent()); ?></p>
        <p><?= htmlspecialchars($article->getAuthor()); ?></p>
        <p>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
    </div>
    <div class="actions">
        <?php if ($this->session->get('role') === 'admin') { ?>
            <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a><br>
            <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
        <?php } ?>
    </div>
    <br>
    <div id="comments" class="text-left">
        <br>
        <h3>Ajouter un commentaire</h3>
        <?php include('form_comment.php'); ?>
        <h3>Commentaires</h3>
        <?php
        foreach ($comments as $comment) {
        ?>
            <h4><?= htmlspecialchars($comment->getPseudo()); ?></h4>
            <p><?= htmlspecialchars($comment->getContent()); ?></p>
            <p>Posté le <?= htmlspecialchars($comment->getCreatedAt()); ?></p>
            <?php

            if ($comment->isFlag()) {
            ?>
                <p>Ce commentaire a déjà été signalé</p>
            <?php
            } else {
            ?>
                <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php }
            if($this->session->get('role') === 'admin') { ?>
            <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
            <?php } ?>
            <br>
        <?php
        }
        ?>
    </div>
    <br>
    <br>
</section>
<div class="center footer">
    <a href="../public/index.php?route=presentation">Retour à l'accueil</a>
    <a href="../public/index.php">Retour au blog</a>
</div>