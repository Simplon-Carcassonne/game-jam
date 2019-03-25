<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Jam Carcassonne</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                    <img src="img/logo.png" alt="logo">
                    <h2>Venez participer et découvrir le développement d'un Jeu Vidéo !</h2>
                    <h3>Formez votre équipe pour créer un SERIOUS GAME</h3>
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


        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-02s text-center">
                        <div class="img">
                            <i class="fa fa-gamepad"></i>
                        </div>
                        <h3 class="abt-hd">Le Jeu</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-04s text-center">
                        <div class="img">
                            <i class="fa fa-users"></i>
                        </div>
                        <h3 class="abt-hd">Les Equipes</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-06s text-center">
                        <div class="img">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3 class="abt-hd">Le Système</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-08s text-center">
                        <div class="img">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <h3 class="abt-hd">L'environnement</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="about-title">
                            <h2>Qui sommes nous ?</h2>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium <br>voluptatum deleniti atque corrupti quos dolores e</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="us">
                            <img src="img/simplon.png" alt="">
                            <img src="img/event_orizon.png" alt="">
                            <img src="img/gnt.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="about-title">
                            <h2>Nos Partenaires</h2>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium <br>voluptatum deleniti atque corrupti quos dolores e</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="us">
                            <img src="img/simplon.png" alt="">
                            <img src="img/logoCarca.png" alt="">
                            <img src="img/Godot.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include 'inc/contactForm.php';
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
    <!--<script src="contactform/contactform.js"></script>-->

</body>

</html> 