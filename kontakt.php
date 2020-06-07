<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontakt</title>
    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/style.css?v=28">
		<link rel="icon" type="image/png" href="assets/images/logga_gammal_square.png" sizes="1714x1934">
    <script src="script.js?v=26"></script>
  </head>
  <body class="bg-light">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <?php include 'p.php'; ?>
    <header>
      <nav id="mainNav" class="navbar fixed-top navbar-dark navbar-expand-md">
        <div class="container my-1">
          <div class="mb-auto">
            <a href="index.php?lang=<?php echo $lang; ?>" class="navbar-brand lead ml-3">
              <img class="logo" src="assets/images/logga_gammal.png" alt="Fusions logotyp">
              Fusion
            </a>
          </div>
          <div class="ml-auto">
            <button id="togg" class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto bd-highlight">
                <li class="nav-item"><a href="assets/fusion_broschyr.pdf" class="nav-link"><?php echo $language["BROSCHYR"]; ?></a></li>
                <li class="nav-item"><a href="utstallare.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["UTSTALLARE"]; ?></a></li>
                <li class="nav-item active"><a href="kontakt.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["KONTAKT"]; ?></a></li>
                <li class="nav-item"><a href="for_foretag.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["FORFORETAG"]; ?></a></li>
                <li id="logo_sv" class="nav-item"><a href="kontakt.php?lang=sv"><img class="fab langlogo m-2 ml-md-3" src="assets/images/sweden.png"></a></li>
                <li id="logo_en" class="nav-item"><a href="kontakt.php?lang=en"><img class="fab langlogo m-2" src="assets/images/united-kingdom.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="after-nav bg-image full-background pb-2">
    			<div class="text-light container bg-transparent rounded-0">
            <div class="jumbotron mb-0 mt-4 py-2">
              <h1 class="display-4"><?php echo $language["KONTAKT"]; ?></h1>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-light">
        <div class="container jumbotron mb-0 text-center">
          <h2 class="text-dark mb-4">
            <?php echo $language["KONTAKTAFUSION"]; ?>
          </h2>
          <div class="row text-dark justify-content-center">
            <div class="col-md-3">
              <p>
                <span class="lead"><?php echo $language["PROJEKTANSVARIG"]; ?></span><br>
                Oscar Wistemar<br>
                <a href="mailto:plfusion@f.kth.se" class="text-primary">plfusion@f.kth.se</a><br>
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <span class="lead"><?php echo $language["FORETAGSKONTAKT"]; ?></span><br>
                <a href="mailto:fusion@f.kth.se" class="text-primary">fusion@f.kth.se</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <section class="bg-light">
        <div class="container text-center">
          <div class="jumbotron">
            <h2>
              <?php echo $language["PROJEKTGRUPP"]; ?>
            </h2>
            <div class="justify-content-center d-flex flex-wrap my-4">
              <div class="mx-4 my-2 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Oscar.jpg" alt="Bild av projektansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Oscar Wistemar<br><?php echo $language["PROJEKTANSVARIG"]; ?> <br><a href="mailto:plfusion@f.kth.se" class="text-dark">plfusion@f.kth.se</a></figcaption>
                </figure>
              </div>
            <div>
            <div class="justify-content-center d-flex flex-wrap">
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Oskar.jpg" alt="Bild av marknadsföringsansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Oskar Söderberg<br><?php echo $language["MARKNAD"]; ?></figcaption>
                </figure>
              </div>
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Marcus.jpg" alt="Bild av företagsansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Marcus Johnson<br><?php echo $language["FORETAGSANSVARIG"]; ?></figcaption>
                </figure>
              </div>
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Ludvig.jpg" alt="Bild av företagsansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Ludvig Karlsson<br><?php echo $language["FORETAGSANSVARIG"]; ?></figcaption>
                </figure>
              </div>
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/HannesK.jpg" alt="Bild av företagsansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Hannes Karlsson<br><?php echo $language["FORETAGSANSVARIG"]; ?></figcaption>
                </figure>
              </div>
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Alexander.jpg" alt="Bild av företagsansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Alexander Björkenstam<br><?php echo $language["FORETAGSANSVARIG"]; ?></figcaption>
                </figure>
              </div>
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Hannes.jpg" alt="Bild av logistiksansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Hannes Backe<br><?php echo $language["LOGISTIKANSVARIG"]; ?></figcaption>
                </figure>
              </div>
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Jakob.jpg" alt="Bild av ekonomiansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Jakob Myhrman<br><?php echo $language["EKONOMIANSVARIG"]; ?></figcaption>
                </figure>
              </div>
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Johan.jpg" alt="Bild av eventsansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Johan Larsson<br><?php echo $language["EVENTANSVARIG"]; ?></figcaption>
                </figure>
              </div>
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Hanna.jpg" alt="Bild av sittningsansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Hanna Kylhammar<br><?php echo $language["SITTNINGSANSVARIG"]; ?></figcaption>
                </figure>
              </div>
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Adam.jpg" alt="Bild av sittningsansvarig Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Adam Erlandsson<br><?php echo $language["SITTNINGSANSVARIG"]; ?></figcaption>
                </figure>
              </div>
              <div class="m-4 justify-content-center">
                <figure>
                  <img src="assets/images/kontaktbilder/Cornelia.jpg" alt="Bild av CL-representant Fusion 2020" class="size230 rounded-circle">
                  <figcaption class="my-3 font-weight-light text-center">Cornelia Holm<br><?php echo $language["CL"]; ?></figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="bg-secondary">
      <div class="container py-4">
        <div class="row font-weight-light">
          <section class="col-md">
            <h5 class="lead"><?php echo $language["HITTA"]; ?></h5>
            <p>Nymble<br>
            <?php echo $language["ADRESS"]; ?><br>
            <?php echo $language["ORT"]; ?></p>
          </section>
          <section class="col-md">
            <h5 class="lead"><?php echo $language["KONTAKT"]; ?></h5>
            <p>
              <?php echo $language["PROJEKTLEDARE"]; ?><br>
              <a href="mailto:plfusion@f.kth.se" class="text-white">plfusion@f.kth.se</a><br>
              <?php echo $language["FORETAGSKONTAKT"]; ?><br>
              <a href="mailto:fusion@f.kth.se" class="text-white">fusion@f.kth.se</a>
            </p>
          </section>
          <section class="col-md">
            <h5 class="lead mb-3"><?php echo $language["LANKAR"]; ?></h5>
            <a href="https://www.facebook.com/fusionkth/"><i class="fab fa-facebook mr-4"></i></a>
            <a href="https://www.instagram.com/fusionkth/"><i class="fab fa-instagram mr-4"></i></a>
            <a href="https://f.kth.se/namnder/fn/"><img class="fab fysiksektionen mr-4" src="assets/images/fysiksektionen_white.png" alt="Fysiksektionens f"></a>
          </section>
        </div>
      </div>
      <div>
        <p class="text-muted m-0 text-right text-note p-2">
          <?php echo $language["UTVECKLAD"]; ?>
        </p>
      </div>
    </footer>
  </body>
</html>
