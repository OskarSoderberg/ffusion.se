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
                <li class="nav-item active"><a href="utstallare.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["UTSTALLARE"]; ?></a></li>
                <li class="nav-item"><a href="kontakt.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["KONTAKT"]; ?></a></li>
                <li class="nav-item"><a href="for_foretag.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["FORFORETAG"]; ?></a></li>
                <li id="logo_sv" class="nav-item"><a href="utstallare.php?lang=sv"><img class="fab langlogo m-2 ml-md-3" src="assets/images/sweden.png"></a></li>
                <li id="logo_en" class="nav-item"><a href="utstallare.php?lang=en"><img class="fab langlogo m-2" src="assets/images/united-kingdom.png"></a></li>
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
              <h1 class="display-4"><?php echo $language["UTSTALLARE"]; ?></h1>
            </div>
          </div>
        </div>
      </section>
      <!--
      <section class="bg-light">
        <div class="container">
          <section class="jumbotron text-center mb-0">
            <h2><?php echo $language["VARADEL"]; ?></h2>
            <p class="lead"><?php echo $language["SKICKA"]; ?></p>
            <a class="btn btn-primary btn-md  mt-auto" href="for_foretag.php?lang=<?php echo $lang; ?>" role="button"><?php echo $language["TILLANMALAN"]; ?></a>
          </section>
        </div>
      </section>
    -->

      <section class="bg-light">
        <div class="container">
          <div class="jumbotron text-center pb-0 pb-sm-4 mb-0">
            <h2 class="mb-4"><?php echo $language["UTSTALLARE2020"]; ?></h2>
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.ericsson.com/en" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/ericsson.png" alt="Ericsson logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.if.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/if_logo.png" alt="If logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.sunstone.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/sunstone_logga.png" alt="Sunstone logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.trioptima.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/trioptima-rgb.png" alt="Trioptima logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.kry.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/lakare-pa-kry.png" alt="KRYs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.comsol.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/comsol_logo.png" alt="COMSOLs logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.ey.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/ey.png" alt="EYs logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.find-out.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/findout_logga.png" alt="Findouts logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.foi.se/en/foi.html" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/foi_logga.png" alt="FOIs logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.yabs.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/yabs.png" alt="YABSs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://silexmicrosystems.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/silex.jpg" alt="Silexs logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.ampfield.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/ampfield_logga.png" alt="Ampfields logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.sverigesingenjorer.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/sveriges_ingenjorer.png" alt="Sveriges ingenjörers logotyp"></a>
              </section>
              <section class="card">
                <a href="https://se.megger.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/megger_logo_colour.jpg" alt="Meggers logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.jernkontoret.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/jernkontoret_logga.png" alt="Jernkontorets logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.coboltlasers.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/cobolt.jpg" alt="Cobolts logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.lynxhedge.se/en" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/lynx.png" alt="Lynxs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.ohman.se/en/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/ohman.png" alt="Öhmans logotyp"></a>
              </section>
            </section>
          </div>
        </div>
      </section>

      <hr>
      <section class="bg-light">
        <div class="container">
          <div class="jumbotron text-center pb-0 pb-sm-4 mb-0">
            <h2 class="mb-4"><?php echo $language["UTSTALLARE2019"]; ?></h2>
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="http://www.ampfield.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/ampfield_logga.png" alt="Ampfields logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.attentec.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/attentec_logo.jpg" alt="Attentec logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.bcg.com/beyond-consulting/bcg-gamma/default.aspx" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/bcg.png" alt="BCG Gammas logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.comsol.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/comsol_logo.png" alt="COMSOLs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.decerno.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/decerno_logga.png" alt="Decernos logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.ericsson.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/ericsson.png" alt="Ericssons logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.ey.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/ey.png" alt="EYs logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.find-out.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/findout_logga.png" alt="Findouts logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.foi.se/en/foi.html" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/foi_logga.png" alt="FOIs logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.idainfront.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/idainfront_logg.png" alt="Idainfronts logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.if.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/if_logga.png" alt="Ifs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.jernkontoret.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/jernkontoret_logga.png" alt="Jernkontorets logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.kry.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/lakare-pa-kry.png" alt="KRYs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://se.megger.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/megger_logo_colour.jpg" alt="Meggers logotyp"></a>
              </section>
              <section class="card">
                <a href="https://omegapoint.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/omegapoint_logga.png" alt="Omegapoints logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://saabgroup.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/saab_group.png" alt="Saabs logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.sunstone.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/sunstone_logga.png" alt="Sunstones logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.sverigesingenjorer.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/sveriges_ingenjorer.png" alt="Sveriges Ingenjörers logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.trioptima.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/trioptima_logga.jpg" alt="Trioptima logotyp"></a>
              </section>
              <section class="card invisible">
                <a href="#"><img class="card-img-top card-img-top-md mx-auto" src="#" alt="Sunstones logotyp"></a>
              </section>
              <section class="card invisible">
                <a href="#"><img class="card-img-top card-img-top-md mx-auto" src="#" alt="Sveriges Ingenjörers logotyp"></a>
              </section>
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
