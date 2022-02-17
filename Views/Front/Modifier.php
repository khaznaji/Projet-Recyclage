<?php
require_once ("C:/xampp/htdocs/pp/Controller/connection.php");
require_once ("C:/xampp/htdocs/pp/Model/sevice.php");
require_once ("C:/xampp/htdocs/pp/Controller/servicec.php");
$db=config::getConnexion();
$sql="SELECT * FROM users where id=?";
$recipesStatement = $db->prepare($sql);
session_start();
if (isset($_GET['id_produi'])) {
  echo '1';
  $recipesStatement->execute([$_GET['id_produi']]);
} else {
  echo '2';
  echo $_SESSION['user_id'];
    $recipesStatement->execute([$_SESSION['user_id']]);
}
$prod=$recipesStatement->fetchall();

?>
<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
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
  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <!-- Navigation -->
        <ul class="navbar-nav">

          <?php if ($_SESSION['type'] ==  'admin'): ?>
          <li class="nav-item  active ">
            <a class="nav-link  active " href="./index.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
          
            </a>
          </li>


           <?php endif; 
?>
          <li class="nav-item  active ">
            <a class="nav-link  active " href="./Modifier.php">
              <i class="ni ni-tv-2 text-primary"></i> Profile
          
            </a>
          </li>
          <li class="nav-item  active ">
            <a class="nav-link  active " href="../logout.php">
              <i class="ni ni-tv-2 text-primary"></i> Logout

          
            </a>
          </li>

          

          
        </ul>
        <!-- Divider -->

      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
   
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
      
           

<form class="table align-items-center table-flush"  name="f1"  method="post" action="Modifierser.php" enctype="multipart/form-data" onSubmit="return verif()">
        <center><legend><h2> Modifier  </h2></legend></center>
        <?php
foreach ($prod as $res) {


}
?>
 <div class="row">
      <div class="col-4 ">


<div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
             

            </span><div class="col-md-4">
                      <div class="add-product-image-upload">
                                             Photo de Profil :
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <div class="product-upload-image">
                                                         <!-- hide image tag -->
                                                         <img src="" style="display:none;" height="200" id="image">
                                                         <!-- preview Trigger -->
                                                         <input class="btn btn-success" type="file" name="profileImage" onchange="showImage.call(this)">
                                                         <script>
                                                               function showImage()
                                                               {
                                                                  if(this.files && this.files[0])
                                                                  {
                                                                     var obj = new FileReader();
                                                                     obj.onload = function(data){
                                                                           var image = document.getElementById("image");
                                                                           image.src = data.target.result;
                                                                           image.style.display = "block";
                                                                     }
                                                                     obj.readAsDataURL(this.files[0]);
                                                                  }
                                                               }
                                                         </script>    
                                                      </div>
                                                        
                                                   </div>
                                                      </div>
                                                   </div>
                      </div> 
            <label>Profile Image</label>
          </div>
          

</div>
<div class="table-responsive col-8">
              <!-- Projects table -->
          
   

        
        
        <table id="example1" class="table table-striped">
        <tr>
          <input type="hidden" name="id_produit" value="<?php echo $res['id'] ?>">
          <th style="color:white">Nom</th>
          
             <th><input type="text" name="nom" value="<?php  echo $res['user_name']; ?>"/></th>
        </tr>
        <th>mdp</th>
          <th><input type="text" name="mdp" value="<?php  echo $res['password']; ?>"/></th>
         <tr>
          <th style="color:white" >email</th>
          <th><input type="email" name="email" value="<?php  echo $res['email']; ?>"/></th>
        </tr>
       


        </table>
        <br>
        <center>
        <td><button type="submit" name="Modifier" value="Modifier" class="btn btn-danger">Modifier</button></td>
      
            </div>

</center>
      </form>
</div>


</div>









      
            

          </div>
        </div>
       <table>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
    
    </div>
  </div>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });

<?php
foreach ($prod as $res) {


}
?>
// Check if the page has loaded completely                                         
    $(document).ready( function() { 
      var javaScriptVar = "<?php echo $res['profile_image']; ?>";
      if (javaScriptVar) {
      document.querySelector('#profileDisplay').setAttribute('src', 'images/'  + javaScriptVar);  
    }else{
      document.querySelector('#profileDisplay').setAttribute('src', "images/avatarr.jpg"); 
    }
       


    }); 
  </script>
  <script src="scripts.js"> 


  </script>

  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


</body>

</html>