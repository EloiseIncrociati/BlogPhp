<?php $this->title = 'Administration'; ?>
<h1 class="title-page">Administration du Blog</h1>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>
<section id= "admin-article" class="blog-section admin my-5 shadow mb-5 bg-white rounded">
    <h2>Articles</h2>
    <br>
    <table class="tableaux">
        <tr class="tableaux-title">
            <td>Id</td>
            <td>Titre</td>
            <td>Chapo</td>
            <td>Auteur</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
        <?php
        foreach ($articles as $article) {
        ?>
            <tr>
                <td><?= htmlspecialchars($article->getId()); ?></td>
                <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()); ?>"><?= htmlspecialchars($article->getTitle()); ?></a></td>
                <td><?= substr(htmlspecialchars($article->getChapo()), 0, 150); ?></td>
                <td><?= htmlspecialchars($article->getAuthor()); ?></td>
                <td>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></td>
                <td>
                    <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                    <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <div class="btn-wrapper">
        <button type="button" class="btn" onclick="window.location.href='index.php?route=addArticle';">Nouvel article</button>
    </div>
</section>

<section class="blog-section admin my-5 shadow mb-5 bg-white rounded">
    <h2>Commentaires signalés</h2>
    <table class="tableaux">
        <tr class="tableaux-title">
            <td>Id</td>
            <td>Pseudo</td>
            <td>Message</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
        <?php
        foreach ($comments as $comment) {
        ?>
            <tr>
                <td><?= htmlspecialchars($comment->getId()); ?></td>
                <td><?= htmlspecialchars($comment->getPseudo()); ?></td>
                <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150); ?></td>
                <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt()); ?></td>
                <td>
                    <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
                    <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</section>

<section class="blog-section admin my-5 shadow mb-5 bg-white rounded">
    <h2>Utilisateurs</h2>
    <table class="tableaux">
        <tr class="tableaux-title">
            <td>Id</td>
            <td>Pseudo</td>
            <td>Date</td>
            <td>Rôle</td>
            <td>Actions</td>
        </tr>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= htmlspecialchars($user->getId()); ?></td>
                <td><?= htmlspecialchars($user->getPseudo()); ?></td>
                <td>Créé le : <?= htmlspecialchars($user->getCreatedAt()); ?></td>
                <td><?= htmlspecialchars($user->getRole()); ?></td>
                <td>
                    <?php
                    if ($user->getRole() != 'admin') {
                    ?>
                        <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
                    <?php } else {
                    ?>
                        Suppression impossible
                    <?php
                    }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</section>
<div class="center footer">
    <a href="../public/index.php?route=presentation">Retour à l'accueil</a>
    <a href="../public/index.php">Retour au blog</a>
</div>