<?php $this->title = 'Blog'; ?>
<h1 class="title-page">Accueil Blog</h1>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>

<section id="bloglist">
    <?php
    foreach ($articles as $article) {
    ?>
        <div class="blog-list col-md-5 col-sm9 shadow mb-5 bg-white rounded">
            <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()); ?>"><?= htmlspecialchars($article->getTitle()); ?></a></h2>
            <p><?= htmlspecialchars($article->getContent()); ?></p>
            <p><?= htmlspecialchars($article->getAuthor()); ?></p>
            <p>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
        </div>
    <?php
    }
    ?>
</section>