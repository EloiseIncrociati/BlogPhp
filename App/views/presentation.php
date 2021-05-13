<?php $this->title = 'Accueil'; ?>
<h2>Bienvenue sur mon blog</h2>
<?php

?>
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

<section id="box" class="contact-section my-5 shadow p-3 mb-5 bg-white rounded">
  <div class="card">
    <div class="row">
      <div class="col-lg-8">
        <div class="card-body form">
          <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
            <h3 class="mt-4"><i class="fas fa-paper-plane"></i> Contact:</h3>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <label>Nom: <span>*</span></label>
                  <input type="text" id="name" name="name" placeholder="Nom" class="form-control"/>
                </div>
                <div class="md-form mb-0">
                  <label>Email: <span>*</span></label><span id="info" class="info"></span>
                  <input type="text" id="email" name="email" placeholder="Email" class="form-control" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <label>Message:</label>
                  <textarea id="message" class="form-control md-textarea" name="message" placeholder="Message..."></textarea>
                  <input type="submit" name="send" value="Envoyer" /><i class="far fa-paper-plane"></i>
                </div>
              </div>
            </div>
            <div id="statusMessage">
              <?php if (!empty($db_msg)) { ?>
                <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
              <?php } ?>
              <?php if (!empty($mail_msg)) { ?>
                <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
              <?php } ?>
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