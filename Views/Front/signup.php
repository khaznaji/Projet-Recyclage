<?php
require_once ("C:/xampp/htdocs/pp/Controller/ParticipantC.php");
require_once ("C:/xampp/htdocs/pp/Model/Participant.php");


$error = "";
$participant = null;
$participantC = new ParticipantC();

if (isset($_POST["CIN"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["telephone"]) && isset($_POST["email"]) && isset($_POST["adresse"]) && isset($_POST["login"]) && isset($_POST["pass"]) && isset($_POST["titre"])) {
    if ($participantC->unique_log($_POST["login"]) == false) {
        $participant = new Participant(
            $_POST["CIN"],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST["telephone"],
            $_POST['email'],
            $_POST['adresse'],
            $_POST['login'],
            $_POST['pass'],
            $_POST['titre']

        );
        $participantC->ajouterParticipant($participant);
        //envoi d'un mail d'inscription valide


        /* function sanitize_my_email($field) {
            $field = filter_var($field, FILTER_SANITIZE_EMAIL);
            if (filter_var($field, FILTER_VALIDATE_EMAIL )) {
                return true;
            } else {
                return false;
            }
        }
*/
        $to_email = $_POST['email'];
        $subject = 'Testing PHP Mail';
        $message = 'This mail is sent using the PHP mail Inscription valide';
        $headers = 'marwa.ayari97@gmail.com ';
        //check if the email address is invalid $secure_check
        $secure_check = false; //sanitize_my_email($to_email);
        if ($secure_check == false) {
            echo "adresse email invalide";
        } else { //send email 
            mail($to_email, $subject, $message, $headers);
            echo ('<script> alert("Nous vous avons envoyer un mail"); </script>');
        }



        header('Location:signin.php');
        } else {
        echo ('<script> alert("Ce compte login existe deja"); </script>');
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
    <form action="signup.php" method="POST">
       
                <a class="navbar-brand">
                </a>
                Cin :
                <div class="input-group">
                    <input class="form-control" type="number" id="CIN" name="CIN" placeholder="CIN" onfocusout="cinfc()" Required>
                </div>
                <label id="elementcin" name="erreur" style="color: red;display: none;">Le CIN est invalide</label>



                Nom :
                <div class="input-group">
                    <input class="form-control" type="text" id="nom" name="nom" placeholder="nom" onfocusout="majus_nom()" Required>
                </div>
                <label id="element" name="erreur" style="color: red;display: none;">Le nom doit commencer par une majuscule </label>


                Prenom :
                <div class="input-group">
                    <input class="form-control" type="text" id="prenom" name="prenom" placeholder="prenom" onfocusout="majus_prenom()" Required>
                </div>
                <label id="element1" name="erreur" style="color: red;display: none;">Le prenom doit commencer par une majuscule </label>


                Adresse mail :
                <div class="input-group">
                    <input class="form-control" type="text" name="email" id="email" placeholder="Enter mail" onfocusout="ad_email()" Required>
                </div>
                <label id="elementemail" name="erreur" style="color: red;display: none;">L'adresse email est invalide </label>


                Telephone :
                <div class="input-group">
                    <input class="form-control" type="number" id="telephone" name="telephone" placeholder="24123856" minlength="8" maxlength="8" onfocusout="telephonefc()" Required>
                </div>
                <label id="element2" name="erreur" style="color: red;display: none;">Le numéro de téléphone est erroné </label>


               Titre :
                <div class="input-group">
                <input class="form-control" type="text" id="titre" name="titre" placeholder="Entrer le titre"  Required>

                </div><label id="elementpr" name="erreur" style="color: red;display: none;">Veuillez choisir votre formation </label>


                Adresse :
                <div class="input-group">
                    <textarea class="form-control" name="adresse" id="adresse" cols="30" rows="2" Required></textarea>
                </div>

                Login :
                <div class="input-group">
                    <input class="form-control" type="text" name="login" id="login" placeholder="suzanne12" onfocusout="vide_unique_log()" Required>
                </div>
                <label id="elementlog" name="erreur" style="color: red;display: none;">Le login est obligatoire et doit etre unique</label>

                Mot de passe :
                <div class="input-group">
                    <input class="form-control" type="password" id="pass1" name="pass" placeholder="*****" onfocusout="passf()" Required>
                </div>

                Confirmer mot de passe :
                <div class="input-group">
                    <input class="form-control" type="password" id="pass2" placeholder="*****" onfocusout="passf()" Required>
                </div>
                <label id="elementpass" name="erreur" style="color: red;display: none;">Veuillez verifier votre mot de passe </label>
<br>
                <input class="btn btn-primary btn-block btn-lg btn-circle btn-outline-new-white button3" type="submit" name="submit" value="S'inscrire" onClick="validation()">
            </div>
        </div>


    </form>
    </div>
</div>
</div>
</section>

    <script>
        function majus_nom() {
            var ch = document.getElementById("nom").value;
            var element = document.getElementById("element");
            if ((ch === "") || (ch.charCodeAt(0) < 65) || (ch.charCodeAt(0) > 91)) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }

        function majus_prenom() {
            var ch = document.getElementById("prenom").value;
            var element = document.getElementById("element1");
            if ((ch === "") || (ch.charCodeAt(0) < 65) || (ch.charCodeAt(0) > 91)) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }

        function ad_email() {
            var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
            var element = document.getElementById("elementemail");
            if (expressionReguliere.test(document.getElementById("email").value)) {
                element.style.display = "none";
            } else {
                element.style.display = "block";
            }
        }

        function telephonefc() {
            var element = document.getElementById("element2");
            if (Number(document.getElementById("telephone").value) < 10000000) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }

        function cinfc() {
            var element = document.getElementById("elementcin");
            if (Number(document.getElementById("CIN").value) < 10000000) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }

       

        function passf() {
            var ch1 = document.getElementById("pass1").value;
            var ch2 = document.getElementById("pass2").value;
            var element = document.getElementById("elementpass");
            if ((ch1 != "") && (ch2 != "") && (ch1 == ch2)) {
                element.style.display = "none";
            } else {
                element.style.display = "block";
            }
        }

        function vide_unique_log() {
            var ch = document.getElementById("login").value;
            var element = document.getElementById("elementlog");
            if (ch === "") {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }

        }

        function validation() {
            majus_nom();
            majus_prenom();
            ad_email();
            telephonefc();
            cinfc();
            prof();
            passf();
            vide_unique_log();
            var error1 = document.getElementById("element");
            var error2 = document.getElementById("element1");
            var error3 = document.getElementById("element2");
            var error5 = document.getElementById("elementpr");
            var error6 = document.getElementById("elementemail");
            var error7 = document.getElementById("elementpass");
            var error8 = document.getElementById("elementlog");
            var error0 = document.getElementById("elementcin");
            var ch = document.getElementById("nom").value;
            var ch1 = document.getElementById("prenom").value;

            if ((error0.style.display == "none") && (error1.style.display == "none") && (error2.style.display == "none") && (error3.style.display == "none") && (error5.style.display == "none") && (error6.style.display == "none") && (error7.style.display == "none") && (error8.style.display == "none"))
                alert("Formulaire bien rempli");
            else alert("Votre formulaire est mal rempli");
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
    </form>
</body>


</html>