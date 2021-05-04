<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/sass/main.css">
    <script src="https://kit.fontawesome.com/00b127d1df.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container topspace">
        <div class="identity col-md-12 col-sd-12 box">
            <div class="cardaccueil col-md-6">
                <div class="name">
                    <img src="../public/img/depositphotos_prulpe.jpg" alt="Profile picture" />
                    <h1>Eloïse Incrociati</h1>
                </div></br>
            </div>
            <nav class="navbar navbar-expand-lg push">
                <a class="navbar-brand" href="../public/index.php?route=presentation">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../public/index.php">Blog</a>
                        </li>
                        <?php
                        if ($this->session->get('pseudo')) {
                        ?>
                            <li class="nav-item active">
                                <a class="nav-link" href="../public/index.php?route=logout">Déconnexion</a>
                            </li>
                            <li>
                                <a class="nav-link" href="../public/index.php?route=profile">Profil</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../public/index.php?route=register">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../public/index.php?route=login">Connexion</a>
                            </li>
                        <?php }
                        if ($this->session->get('role') === 'admin') { ?>
                            <li>
                                <a class="nav-link" href="../public/index.php?route=administration">Administration</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
        <p class="paragraphes">Développeuse d'Application Php, quand travailler devient un plaisir.</p>
        <div id="content">
            <?= $content ?>
        </div>
    </div>
</body>

</html>