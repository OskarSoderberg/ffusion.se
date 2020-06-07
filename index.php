<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fusion 2020</title>
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
      <header>
        <nav id="mainNav" class="navbar fixed-top navbar-dark navbar-expand-md">
          <div class="container my-1">
            <div class="mb-auto">
              <a href="index.php" class="navbar-brand lead ml-3">
                <img class="logo" src="assets/images/logga_gammal.png" alt="Fusions logotyp">
                Fusion
              </a>
            </div>
            <div class="ml-auto">
              <button id="togg" class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto bd-highlight d-flex align-items-center">
                  <li class="nav-item"><a href="assets/fusion_broschyr.pdf" class="nav-link"><?php echo $language["BROSCHYR"]; ?></a></li>
                  <li class="nav-item"><a href="utstallare.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["UTSTALLARE"]; ?></a></li>
                  <li class="nav-item"><a href="kontakt.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["KONTAKT"]; ?></a></li>
                  <li class="nav-item"><a href="for_foretag.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["FORFORETAG"]; ?></a></li>
                  <li id="logo_sv" class="nav-item"><a href="index.php?lang=sv"><img class="fab langlogo m-2 ml-md-3" src="assets/images/sweden.png"></a></li>
                  <li id="logo_en" class="nav-item"><a href="index.php?lang=en"><img class="fab langlogo m-2" src="assets/images/united-kingdom.png"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>
    </header>
    <main>
      <section class="bg-image full-background pb-2 min-vh-100 d-flex align-items-center">
        <div class="container">
          <!-- Hej -->
    			<div class="after-nav jumbotron text-light bg-transparent rounded-0 d-flex align-items-center">
            <div class="row mt-5">
              <aside class="col-2 mr-4 d-none d-md-flex align-items-center">
                 <img class="w-100 my-auto" src="assets/images/logga_gammal.png" alt="Fusions logotyp">
              </aside>
              <div class="col text-center text-md-left">
                <h1 class="display-4">
                  <img class="d-none d-sm-inline-block d-md-none font-size-img mb-2 mr-2" src="assets/images/logga_gammal.png" alt="Fusions logotyp">
                  Fusion 2020
                </h1>
                <p class="lead">
                  <?php echo $language["MAIN1"]; ?>
                </p>
                <hr class="my-4 hr-light">
                <p class="font-weight-light">
                  <?php echo $language["MAIN2"]; ?> <br> <?php echo $language["VALKOMMEN"]; ?>
                  <span class="text-primary lead"> <?php echo $language["DATUM"]; ?></span>.
                </p>
              </div>
            </div>
          </div>
          <div class="jumbotron py-0 mt-5 mx-auto">
            <figure class="tiny">
              <a><img id="arrow" src="assets/images/arrow.png" alt="Pil nedåt" class="h-100 mx-auto d-block"></a>
            </figure>
          </div>
        </div>
      </section>
      <section class="bg-light">
        <div id="scrollhere" class="container">
          <div class="jumbotron mb-0">
            <div class="row">
              <div class="col-md-8 text-justify text-break my-4 mr-4">
                <h2 class="text-center text-md-left">
                  <?php echo $language["VAD"]; ?>
                </h2>
                <p class="my-4">
                  <?php echo $language["VAD2"]; ?>
                  <span class="lead">
                    <?php echo $language["TMF"]; ?>
                  </span>
                  <?php echo $language["VAD3"]; ?>
                  <a class="text-primary" href="https://www.facebook.com/events/nymble/fusion-2019/781547758843195/"><?php echo $language["FB"]; ?></a>.
                </p>
                <hr class="text-dark">
                <p class="my-4">

                  <?php echo $language["VAD4"]; ?>
                  <!--Är du osäker på vad du vill göra efter studierna? <br>
                  Vill du lära dig mer om Sveriges mest framåtsträvande företag? <br>
                  Letar du efter ett spännande sommarjobb? <br>-->
                </p>
                <a href="utstallare.php?lang=<?php echo $lang; ?>">
                  <button type="button" class="btn btn-primary">
                    <?php echo $language["UTSTALLARE"]; ?>
                  </button>
                </a>
              </div>
              <div class="col-md align-self-center mx-auto">
                <p class="lead my-3"><?php echo $language["PLATS"]; ?></p>
                <p class="lead my-3"><?php echo $language["TID"]; ?>
                <span class="text-primary font-weight-normal"><?php echo $language["TID2"]; ?></span>,
                <?php echo $language["TID3"]; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="jumbotron mb-0 bg-secondary">
          <img class="img-fluid" src="assets/images/karta.png" alt="Mässkarta Fusion 2020">
        </div>
      </section>
      <section class="bg-primary">
        <div class="container jumbotron text-center mb-0">
          <h2 class="text-light mb-4"><?php echo $language["VIFINNS"]; ?></h2>
          <div class="row lead justify-content-center">
            <div class="col-md-3">
              <p><a class="text-light" href="https://www.facebook.com/fusionkth"><i class="fab fa-facebook mb-2"></i><br>Fusion</a></p>
            </div>
            <div class="col-md-3">
              <p><a class="text-light" href="https://www.instagram.com/fusionkth/"><i class="fab fa-instagram mb-2"></i><br>@fusionkth</a></p>
            </div>
            <div class="col-md-3">
              <p><a class="text-light" href="https://f.kth.se/"><img class="fab mb-2" src="assets/images/fysiksektionen_white.png" alt="Fysiksektionens f"><br>fysiksektionen.se</a></p>
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
            <p><?php echo $language["NYMBLE"]; ?><br>
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
