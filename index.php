<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" type="image/png" href="img/Hornet_GJ.png" />
  <title>Game Jam Carcassonne</title>
  <meta name="description" content="Rejoignez la Game Jame sur Carcassonne en Mai 2019">
  <meta property="go:site_name" content="Game Jam Carcassonne" />
  <meta property="go:locale" content="fr_FR " />
  <meta property="go:type" content="website" />
  <meta property="go:title" content="RDV à la Game Jam de Carcassonne" />
  <meta property="go:description" content="Rejoignez la Game Jame et venez participer en Mai 2019 " />
  <meta property="go:url" content="https://game-jam-carcassonne.fr" />
  <meta property="go:image" content="https://game-jam-carcassonne.fr/img/logo.png" />
  <!--<meta property="fb:admins" content="466663333334444" />-->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:url" content="https://game-jam-carcassonne.fr" />
  <meta name="twitter:title" content="RDV à la Game Jam de Carcassonne" />
  <meta name="twitter:description" content="Rejoignez la Game Jame et venez participer en Mai 2019 " />
  <meta name="twitter:site" content="@OrizonEvent" />
  <meta name="twitter:creator" content="@OrizonEvent" />
  <meta name="twitter:image" content="https://game-jam-carcassonne.fr/img/logo.png" />

  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--tooltip.js  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LeeBJoUAAAAANzJ3EdPxe1WFp_8ZPX_S0MJqo6Q"></script>
  <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeeBJoUAAAAANzJ3EdPxe1WFp_8ZPX_S0MJqo6Q', {
                action: 'contact'
            }).then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
    <!-- =======================================================
  Theme Name: Maundy
  Theme URL: https://bootstrapmade.com/maundy-free-coming-soon-bootstrap-theme/
  Author: BootstrapMade.com
  Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body class="gradient">
  <div class="gradient " id="top">

  <?php
    include 'inc/navIndex.php';
  ?>
    <?php
    if (isset($_POST['name'])) {
      include 'inc/manageForm.php';
    }
    ?>
    <div >
        <div class="container wow fadeInUp delay-03s">
            <div class="row">
                <div class="col-md-12 logo text-center">
                    <h1>Formez votre équipe et créez un Serious Game</h1>
                    <img src="img/logo.png" alt="logo">
                    <h1>Ville de Carcassonne</h1>
                    <h2>Venez participer et découvrir le développement d'un Jeu Vidéo !</h2>
                </div>


                <?php
              include 'inc/countdown.php';
                ?>

            </div>
        </div>
        <?php
        include 'inc/moreinfos.php';
        ?>
        <?php
        include 'inc/glossaire.php';
        ?>
        <?php
        include 'inc/whoweare.php';
        ?>
        <?php
        include 'inc/contactForm.php';
        ?>
        <?php
      //  include 'inc/socialmedia.php';
        ?>
        <?php
        include 'inc/map.php';
        ?>
        <?php
        include 'inc/whereEatSleep.php';
        ?>
    </div>
    <?php
    include 'inc/footer.php';
    ?>
    <script src="js/modal.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/class/LeafletMarker.js"></script>
    <script src="js/class/LeafletMap.js"></script>
    <script src="js/class/Phonebutton.js"></script>
    <script src="js/ourJSEffects.js"></script>


  </div>
</body>

</html>
