<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Jam Carcassonne</title>
    <meta name="description" content="Rejoignez la Game Jame sur Carcassonne en Mai 2019">
    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LeeBJoUAAAAANzJ3EdPxe1WFp_8ZPX_S0MJqo6Q"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LeeBJoUAAAAAEXkH-BJu16gH77Zp4ZQSAyQUZ16', { action: 'contact' }).then(function (token) {
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

<body>
    <?php
    if (isset($_POST['name'])) {
      include 'inc/manageForm.php';
    }
    ?>
    <div class="content">
        <div class="container wow fadeInUp delay-03s">
            <div class="row">
                <div class="col-md-12 logo text-center">
                  <h2>Formez votre équipe et créer un Serious Game</h2>
                    <img src="img/logo.png" alt="logo">
                    <p>2 jours pour développer, 2 jours pour créer, 2 jours pour s'entraider et 2 jours pour votre avenir !</p>
                    <h2>Venez participer et découvrir le développement d'un Jeu Vidéo !</h2>
                </div>

                <?php
                include 'inc/countdown.php';
                ?>

                <!-- <h2 class="subs-title text-center">inscrivez-vous et votre équipe !</h2>
          <div class="subcription-info text-center">
          <form class="subscribe_form" action="#" method="post">
          <input required="" value="" placeholder="email..." class="email" id="email" name="email" type="email">
          <input class="subscribe" name="email" value="Envoyer" type="submit">
        </form>
        <p class="sub-p">We Promise to never span you.</p>
      </div> -->
            </div>
        </div>
        <?php
            include 'inc/moreinfos.php';
         ?>
        <?php
            include 'inc/whoweare.php';
         ?>
        <?php
        include 'inc/contactForm.php';
        ?>
         <?php
            include 'inc/map.php';
         ?>
    </div>
    <?php
    include 'inc/footer.php';
    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/LeafletMarker.js"></script>
    <script src="js/LeafletMap.js"></script>
    <script src="js/ourJSEffects.js"></script>
    <script src="js/ourMap.js"></script>


</body>

</html>
