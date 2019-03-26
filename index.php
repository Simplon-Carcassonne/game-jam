<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png"  href="img/Hornet_GJ.png" />
    <title>Game Jam Carcassonne</title>
    <meta name="description" content="Rejoignez la Game Jame sur Carcassonne en Mai 2019">
    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
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
        grecaptcha.ready(function () {
            grecaptcha.execute('6LeeBJoUAAAAANzJ3EdPxe1WFp_8ZPX_S0MJqo6Q', { action: 'contact' }).then(function (token) {
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
                  <h1>Formez votre équipe et créez un Serious Game</h1>
                  <img src="img/logo.png" alt="logo">
                  <h1>Venez participer et découvrir le développement d'un Jeu Vidéo !</h1>
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
    <script src="js/popper.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/class/LeafletMarker.js"></script>
    <script src="js/class/LeafletMap.js"></script>
    <script src="js/class/PhoneButton.js"></script>
    <script src="js/ourJSEffects.js"></script>


</body>

</html>
