<?php $this->title = "Edit article"; ?>
<h1 class="title-page">Modifier l'Article</h1>
<section class="blog-section my-5 shadow mb-5 bg-white rounded">
    <h2 class="title-page">Editer Article</h1>
        <?php if ($this->session->get('role') === 'admin') {
            include 'form_article.php'; ?>
        <?php } else { ?>
            <p>
                Vous n'êtes pas connecté ou ne disposez pas des droits pour effectuer cette action.
            </p>
        <?php } ?>
</section>
<div class="center footer">
    <a href="../public/index.php?route=presentation">Retour à l'accueil</a>
    <a href="../public/index.php">Retour au blog</a>
</div>