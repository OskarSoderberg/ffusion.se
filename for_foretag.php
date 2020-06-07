<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>För företag</title>
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
                <li class="nav-item"><a href="kontakt.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["KONTAKT"]; ?></a></li>
                <li class="nav-item active"><a href="for_foretag.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["FORFORETAG"]; ?></a></li>
                <li id="logo_sv" class="nav-item"><a href="for_foretag.php?lang=sv"><img class="fab langlogo m-2 ml-md-3" src="assets/images/sweden.png"></a></li>
                <li id="logo_en" class="nav-item"><a href="for_foretag.php?lang=en"><img class="fab langlogo m-2" src="assets/images/united-kingdom.png"></a></li>
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
              <h1 class="display-4"><?php echo $language["FORFORETAG"]; ?></h1>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-light">
        <div class="container">
          <div class="jumbotron mb-0">
            <h2 class="text-center mb-4">
              <?php echo $language["VILLVARAMED"]; ?>
            </h2>
            <div class="text-center my-auto">
              <p class="lead">
                <?php echo $language["SKICKAMEDDELANDE"]; ?><a href="mailto:fusion@f.kth.se" class="text-primary">fusion@f.kth.se</a><?php echo $language["SAHORVI"]; ?>
              </p>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <section>
        <div class="container">
          <div class="jumbotron">
            <h2 class="text-center mb-4"><?php echo $language["VARAPAKET"]; ?></h2>
            <div class="overflow-auto">
              <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"><?php echo $language["MASSPAKET"]; ?></th>
                    <th scope="col"><?php echo $language["EVENTPAKET"]; ?></th>
                    <th scope="col"><?php echo $language["HUVUDSPONSOR"]; ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $language["MONTER"]; ?></th>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["FORETAGSVARD"]; ?></th>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["SIDORIBROSCHYR"]; ?></th>
                    <td>1</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["LUNCHBILJETTER"]; ?></th>
                    <td>2</td>
                    <td>3</td>
                    <td><?php echo $language["TILLSAMTLIGA"]; ?></td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["LUNCHFOREL"]; ?></th>
                    <td></td>
                    <td>X</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["BANKETTBILJETTER"]; ?></th>
                    <td></td>
                    <td>2</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["PREMIUMPARTNERSKAP"]; ?></th>
                    <td></td>
                    <td></td>
                    <td>X*</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="mt-0 text-muted">
            <?php echo $language["PREMIUMTEXT"]; ?>
            </p>
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
              <?php echo $language["FORETAGSKONTAKT"]; ?> <br>
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
