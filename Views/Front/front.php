<?php 
require_once ("C:/xampp/htdocs/pp/Controller/CommentC.php");
require_once ("C:/xampp/htdocs/pp/Controller/ResponseC.php");


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['submit'] == "comment") {
      require_once ("C:/xampp/htdocs/pp/Model/Comment.php");
      $comment = new Comment(NULL, $_POST['publisher'], $_POST['content'], date("Y-m-d"));
      $commentC = new CommentC();
      $myCommentId = $commentC->insertComment($comment);
    }
    else if ($_POST['submit'] == "response") {
require_once ("C:/xampp/htdocs/pp/Model/Response.php");
      $response = new Response(NULL, $_POST['name'], $_POST['msg'], date("Y-m-d"), $_POST['idComment']);
      $responseC = new ResponseC();
      $responseC->insertResponse($response);
    }
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

<!-- Team Container -->


<!-- Contact Container -->



<!-- Image of location/map -->

<section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m7">
      <br>
      <br>
      <br>
      <br>
      <br>
      <h1 style="color:white"> Notre Forum </h1>
          <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Commentez-nous</span></div>

      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="" method="POST">
      <div class="w3-section">      
        <label style="color:white">Votre Nom</label>
        <input name="publisher" class="w3-input" type="text" name="Nom" required>
      </div>
      <div class="w3-section">      
        <label style="color:white">Commentaire</label>
        <input name="content" class="w3-input" type="text" name="Message" required>
      </div> 
      <input type="hidden" name="submit" value="comment">
      <button type="submit" value="comment" class="w3-button w3-right w3-theme">Envoyer</button>
      </form>
    </div>
  </div>
  <?php 
    $commentC = new CommentC();
    $comments = $commentC->getComments();
    foreach ($comments as $comment) {
  ?>
  <div class="w3-row">
  <div class="w3-col m12">
      <h3 style="color:white"><?php echo $comment['publisher']; ?></h3>
      <p style="color:white"><?php echo $comment['content'] ?>.</p>
      <p style="color:white" <?php if (!isset($myCommentId) || !($myCommentId == $comment['idComment'])) { echo "hidden"; } ?>>  <?php if (isset($myCommentId) && $myCommentId == $comment['idComment']) { ?>
    <a href="deleteComment.php?comment=<?php echo $comment['idComment']; ?>">delete</a>
  <?php } ?>
  <div class="w3-row"> <button id="button_<?php echo $comment['idComment']; ?>" class="w3-button  w3-theme">Répondre</button> </div>
  <div id="div_<?php echo $comment['idComment']; ?>" style="display: none;">
  <div class="w3-row">
    <div class="w3-col m5">
      <?php 
        $responseC = new ResponseC();
        $responses = $responseC->getResponses($comment['idComment']);
        foreach ($responses as $response) {
          echo "<p>". $response['publisher'] .": ". $response['content'] ."</p>";
        }
       ?>
    </div>
  </div>
  <div class="w3-row">
    <div class="w3-col m9">
      <form method="POST">
        <input type="hidden" name="idComment" value="<?php echo $comment['idComment']; ?>">
        <div class="w3-row">
          <div class="w3-col m2">
            <input type="text" class="w3-input" placeholder="Votre nom..." name="name">
          </div>
          <div class="w3-col m5">
            <input type="text" class="w3-input" placeholder="Message..."  name="msg">
          </div>
          <div class="w3-col m2">
            <input type="hidden" class="w3-button" name="submit" value="response" >
            <button type="submit" value="response" class="w3-button w3-right w3-theme">Envoyer</button>
          </div>
        </div>
        
      </form>
    </div>
  </div>
</div>


    </div>
</div>
<br><br>
    <?php
    }
   ?>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Nous suivre </h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p><a></a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Revenir en haut</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $( "button[id^='button']" ).click(function(e) {
    var elmId = e.target.id;
    var id = elmId.substring(elmId.indexOf('_') + 1);
    var target = "#div_".concat(id);
    $(target).toggle();
  });
</script>


</body>
</html>