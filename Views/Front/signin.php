<?php
require_once ("C:/xampp/htdocs/pp/Controller/ParticipantC.php");
require_once ("C:/xampp/htdocs/pp/Model/Participant.php");

session_start();
$message = "";
$userC = new ParticipantC();
if (
    isset($_POST["login"]) &&
    isset($_POST["pass"])
) {
    if (
        !empty($_POST["login"]) &&
        !empty($_POST["pass"])
    ) {
        $message = $userC->connexionUser($_POST["login"], $_POST["pass"]);
        $_SESSION['e'] = $_POST["login"]; // on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if ($message != 'le login ou le mot de passe est incorrect') {



            header('Location:Formation.php');
        } else {
            $message = 'le login ou le mot de passe est incorrect';
        }
    } else
        $message = "Missing information";
    echo ('<script> alert("Vos données sont incorrectes, Veuillez réessayer"); </script>');
}



?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Grad School HTML5 Template</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Brain</em> Bloom</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
    <ul class="main-menu">
    <li><a href="index.php">Home</a></li>
      <li class="has-submenu"><a href="Formation.php">Formation</a>
        <ul class="sub-menu">
          <li><a href="signup.php">Creer un compte</a></li>
          <li><a href="signin.php">Se Connecter</a></li>

          <li><a href="deconnexion.php">Se deconnecter</a></li>
        </ul>
      </li>
      <li class="has-submenu"><a href="">Parametre</a>
        <ul class="sub-menu">
        <li><a href="../../login.php">Login</a></li>
          <li><a href="../../sign-up.php">Sign up</a></li>

          <li><a href="Modifier.php">Modifier Profil</a></li>
          <li><a href="../../logout.php">Logout</a></li>
        </ul>
      </li> 
      <li><a href="FrontAbonnement.php">Abonnement</a></li>
      <!-- <li><a href="#section5">Video</a></li> -->
      <li><a href="event.php">Evenements</a></li>

      <li><a href="front.php">Forum</a></li>
      </ul>
  </nav>
  </header>
  <section class="section main-banner" id="top" data-section="section1">
          <img src="assets/images/cover.png" alt=""/>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>We're Creating Recycling Solutions</h6>
              <h2><em>For</em> You</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
              </div>
          </div>
      </div>
  </section>
  <section class="section video" data-section="section5">
    <div class="container">
      <div class="container">
    <div class="contact__form">
    <div class="card-body" style="height:110%">
			<form action="signin.php" method="POST">
        <div class="login-form">
            <div class="login-wrap">
               
			<label style="color :black">Login :</label>
                <div class="input-group">
                    <input class="form-control" type="text" name="login" id="login" onfocusout="vide_log()" Required>
                </div>
                <label id="elementlog" name="erreur" style="color: red;display: none;">Ce champ est obligatoire</label>


                <label style="color :black">Mot de passe :</label>
                <div class="input-group">
                    <input class="form-control" type="password" id="pass" name="pass" onfocusout="vide_pass()" Required>
                </div>
                <label id="elementpass" name="erreur" style="color: red;display: none;">Ce champ est obligatoire</label>
<br>
<div class="input-group">
     <div>
                <input class="btn btn-primary  " type="submit" name="submit" value="Se Connecter" onClick="validation()">
            </div>
        </div>
        </div>
</div>
</div>

    </form>
    </body>
<script>
    function vide_log() {
        var ch = document.getElementById("login").value;
        var element = document.getElementById("elementlog");
        if (ch === "") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }

    function vide_pass() {
        var ch = document.getElementById("pass").value;
        var element = document.getElementById("elementpass");
        if (ch === "") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }

    function validation() {
        vide_log();
        vide_pass();
    }
</script>
   <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>