<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


<body id="myPage">


    <?PHP 
    $sql = "SELECT * FROM `abonnement`;";

    include "../../core/abonnementC.php";
    
    $abonnementCvar =new abonnementC();
    $listeabonnements=$abonnementCvar->afficherabonnements();
    ?>
  



  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
  <div class="w3-row-padding w3-center w3-padding-64" id="pricing">
     <br>
     <br>     <h2 style="color:white">Abonnement</h2>
          <p style="color:white">Choisissez votre Abonnement</p><br>
    <?PHP


    foreach($listeabonnements as $row){
        ?>
        <tr>
        

      <!-- Pricing Row -->
      
          
          <div class="w3-third w3-margin-bottom">
            <ul class="w3-ul w3-border w3-hover-shadow">
              <li class="w3-theme">
                <p class="w3-xlarge" style="color:white"><b>Remise -</b><td><?PHP echo $row['id']; ?></td><b>%</b></p>
              </li>
              <li class="w3-padding-16" style="color:white"><b><td><?PHP echo $row['offre']; ?></td></b> </li>
              <li class="w3-padding-16">
                <h2 class="w3-wide" style="color:white"><i class="fa fa-tnd"></i> <td><?PHP echo $row['prix']; ?></td> <b>DT</b></h2>
                <span class="w3-opacity"style="color:white">Au lieu de <td><?PHP echo $row['prix']*($row['id']/100)+$row['prix'] ; ?></td> <b>DT</b></h2></span>
              </li>
              <a href='ajoutercommandefront.php'>
              <li class="w3-theme-l5 w3-padding-24">
                <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
              </a>
              </li>
              </div>

              </tr>
        <?PHP
    }
    ?>

        

      </div>
     
    </body>

    </html>
    
    