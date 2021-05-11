<?php $this->title = 'Accueil'; ?>
<h2>Bienvenue sur mon blog</h2>

<section class="blog-section my-5 shadow mb-5 bg-white rounded">
  <i class="fas fa-eye"></i>
  <h3>Qui suis-je ?</h3>
  <p>
    Je m'appelle Eloïse Incrociati, j'ai 30 ans et je suis actuellement en formation en alternance pour devenir développeuse web. </br>
    Ce blog est un de mes projets pour valider ma formation et je suis heureuse de vous accueillir ici ! </br>
  </p>
  </br>
  <div class="btn-wrapper">
    <button type="button" class="btn" onclick="window.location.href='index.php';">Visiter le Blog</button>
  </div>
  <div class="btn-wrapper">
    <button type="button" class="btn" onclick="window.location.href='cv.pdf';">Télécharger mon CV</button>
  </div>
</section>

<section class="contact-section my-5 shadow p-3 mb-5 bg-white rounded">
  <div class="card">
    <div class="row">
      <div class="col-lg-8">
        <div class="card-body form">
          <form action="envoi.php" method="post" enctype="application/x-www-form-urlencoded" name="formulaire">
            <h3 class="mt-4"><i class="fas fa-paper-plane"></i> Contact:</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="form-contact-name" class="form-control">
                  <label for="form-contact-name" class="">Nom</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="form-contact-prenom" class="form-control">
                  <label for="form-contact-prenom" class="">Prénom</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input type="text" id="form-contact-email" class="form-control">
                  <label for="form-contact-email" class="">Email</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <textarea id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                  <label for="form-contact-message">Your message</label>
                  <a class="btn-floating btn-lg">
                    <i class="far fa-paper-plane"></i>
                  </a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4">
        <div id="reseaux" class="card-body contact text-center h-100 white-text">
          <h3 class="my-4 pb-2">Contact information</h3>
          <form method="post" action="" enctype="">
            <ul class="text-lg-left list-unstyled">
              <li>
                <p><i class="far fa-address-card"></i> Eloïse Incrociati</p>
              </li>
              <li>
                <p><i class="fas fa-phone pr-2"></i> 07 61 12 00 00</p>
              </li>
              <li>
                <p><i class="fas fa-envelope pr-2"></i> foliomoon@gmail.com</p>
              </li>
            </ul>
          </form>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a href="https://github.com/EloiseIncrociati" class="p-2 fa-lg tw-ic">
                <i class="fab fa-github-alt"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/%C3%A9lo%C3%AFse-incrociati-13b083152/?originalSubdomain=fr" class="p-2 fa-lg li-ic">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/stigdraws/" class="p-2 fa-lg ins-ic">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>