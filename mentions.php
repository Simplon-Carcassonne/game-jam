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
            grecaptcha.execute('6LeeBJoUAAAAANzJ3EdPxe1WFp_8ZPX_S0MJqo6Q', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
</head>

<body>
    <div class="content">
        <div class="container wow fadeInUp delay-03s">
            <div class="row">
                <div class="col-md-12 logo text-center">
                  <h2>Formez votre équipe et créez un Serious Game</h2>
                    <img src="img/logo.png" alt="logo">
                    <p>2 jours pour développer, 2 jours pour créer, 2 jours pour s'entraider et 2 jours pour votre avenir !</p>
                    <h2>Venez participer et découvrir le développement d'un Jeu Vidéo !</h2>
                </div>

                <?php
                include 'inc/countdown.php';
                ?>
            </div>
        </div>
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <div class="row text-center">
                <div class="overflowVisible">
                    <h1 class="page-header">Mentions Légales
                        <br/><small>Informations</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <!-- Content Row -->
            <div class="row text-center">
                <h2>Responsable éditorial:</h2><br/><br/>
                Taurisano Alexandre<br/>
                Tél. : + 33 (0)6 32 09 67 92<br/>

                Siège social : 302 Rue Lamarck - 11000 Carcassonne<br/><br/><br/>

                <hr/>
                <h2>Hébergeur:</h2><br/>
                <h3>OVH</h3><br/>

                SAS au capital de 10 069 020 €<br/>
                RCS Lille Métropole 424 761 419 00045<br/>
                Code APE 2620Z<br/>
                N° TVA : FR 22 424 761 419<br/>
                Siège social : 2 rue Kellermann – 59100 Roubaix – France.
            </div>
            <br/><br/>
            <!-- /.row -->
        </div>
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


</body>

</html>
