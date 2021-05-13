<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/sass/main.css">
    <script src="https://kit.fontawesome.com/00b127d1df.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        function validate() {
            var isValid = true;
            var name = $("#name").val();
            var email = $("#email").val();
            var subject = $("#subject").val();
            var message = $("#message").val();
            if (name == "") {
                $("#name").css('border', '#fb0505 1px solid');
                isValid = false;
            }
            if (email == "") {
                $("#email").css('border', '#fb0505 1px solid');
                isValid = false;
            }
            if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#info").html("(Adresse email non valide)");
                $("#email").css('border', '#fb0505 1px solid');
                isValid = false;
            }
            if (subject == "") {
                $("#subject").css('border', '#fb0505 1px solid');
                isValid = false;
            }
            if (message == "") {
                $("#message").css('border', '#fb0505 1px solid');
                isValid = false;
            }
            return isValid;
        }
    </script>
</head>

<body>
    <div class="container topspace">
        <nav class="navbar navbar-expand-lg ml-auto">
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
        <div class="identity col-md-12 col-sd-12 box">
            <div class="cardaccueil col-md-6">
                <div class="name">
                    <img src="../public/img/depositphotos_prulpe.jpg" alt="Profile picture" />
                    <h1>Eloïse Incrociati</h1>
                </div>
            </div>
        </div>
        </br>
        <p class="paragraphes">Développeuse d'Application Php, quand travailler devient un plaisir.</p>
        <div id="content">
            <?= $content ?>
        </div>
    </div>
</body>

</html>