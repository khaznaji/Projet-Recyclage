<?php
require_once ("C:/xampp/htdocs/pp/Controller/ParticipantC.php");
require_once ("C:/xampp/htdocs/pp/Model/Participant.php");

session_start();
$login =$_SESSION['e'];

$participantC = new ParticipantC();
$pdo = config::getConnexion();
$query = $pdo->prepare("select * from participant where login='$login'");
$query->execute();
$result = $query->fetchAll();

if (isset($_POST['update'])) {
  $CIN = $_POST['CIN'];
  $nom = $_POST['Nom'];
  $prenom = $_POST['Prenom'];
  $telephone = $_POST['telephone'];
  $email = $_POST['Email'];
  $login = $_POST['Login'];
  $password = $_POST['Password'];
  $adresse = $_POST['Adresse'];
  $titre = $_POST['titre'];
  $participantC->modifiercompte($CIN, $nom, $prenom, $telephone, $email, $login, $password, $titre, $adresse);
  header("location:Formation.php");
}
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
    <div class="container">
    <form method="POST">
      <div class="login-form">
        <div class="login-wrap">

          <?php foreach ($result as $rows) { ?>
          

            CIN :
            <div class="input-group">
              <input class="form-control" type="number" name="CIN" value="<?php echo $rows['CIN'] ?>" placeholder="Enter your CIN" Required>
            </div>

            Nom :
            <div class="input-group">
              <input class="form-control" type="text" name="Nom" value="<?php echo $rows['nom'] ?>" placeholder="Enter name" Required>
            </div>

            Prenom :
            <div class="input-group">
              <input class="form-control" type="text" name="Prenom" value="<?php echo $rows['prenom'] ?>" placeholder="Enter prenom" Required>
            </div>

            Telephone :
            <div class="input-group">
              <input class="form-control" type="number" name="telephone" value="<?php echo $rows['telephone'] ?>" placeholder="Enter your phone number" Required>
            </div>

            Email :
            <div class="input-group">
              <input class="form-control" type="email" name="Email" value="<?php echo $rows['email'] ?>" pattern=".+@gmail.com|.+@esprit.tn" placeholder="Enter mail" Required>
            </div>

            Adresse :
            <div class="input-group">
              <input class="form-control" type="text" name="Adresse" value="<?php echo $rows['adresse'] ?>" placeholder="Votre adresse" Required>
            </div>

            Titre :
            <div class="input-group">
            <input class="form-control" type="text" name="titre" value="<?php echo $rows['titre'] ?>" placeholder="Votre titre" Required>

              
            </div>

            Login :
            <div class="input-group">
              <input class="form-control" type="text" name="Login" value="<?php echo $rows['login'] ?>" placeholder="Enter LOGIN" Required>
            </div>

            Mot de passe :
            <div class="input-group">
              <input class="form-control" type="password" name="Password" value="<?php echo $rows['password'] ?>" placeholder="Enter PASSWORD" Required>
            </div>
            <br>
            <input  class="btn btn-primary btn-block btn-lg btn-circle btn-outline-new-white button3" type="submit" name="update" value="Modifier">

          <?php } ?>
        </div>
      </div>
    </form>
  </div>
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