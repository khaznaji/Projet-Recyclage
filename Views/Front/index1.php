<?PHP

require_once ("C:/xampp/htdocs/pp/Controller/servicec.php");
require_once ("C:/xampp/htdocs/pp/connection.php");


$produitc=new servic();
$prod=$produitc->afficherservice();

session_start();

?>

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
<body>


  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
          <img src="assets/images/cover.png" alt=""/>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>We're Creating Recycling Solutions</h6>
              <h2><em>For</em> You</h2>
              <div class="main-button">
                  <a href="../../sign-up.php">Discover more</a>
              </div>
          </div>
      </div>
  </section>