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
  if(isset($_POST['name'])){
    include 'inc/manageForm.php';
  }
  ?>

    <div class="content">
      <div class="container wow fadeInUp delay-03s">
        <div class="row">
          <div class="col-md-12 logo text-center">
            <img src="img/logo.png" alt="logo" >
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
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-04s text-center" >
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
  <div id="contact-info">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-title">
            <i class="fa fa-envelope"></i>
            <h2>Get in touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="contact col-md-6 wow fadeIn delay-08s">
          <div class="col-md-10 col-md-offset-1">
            <div id="note"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="contact-submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
<footer class="footer">
  <div class="container">
    <div class="row bort">

      <div class="copyright">
        © Copyright Maundy Theme. All rights reserved.
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maundy
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </div>
 </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/custom.js"></script>
<!--<script src="contactform/contactform.js"></script>-->

</body>

</html>
