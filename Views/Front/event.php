<?php
require_once ("C:/xampp/htdocs/pp/Model/evennement.php");
require_once ("C:/xampp/htdocs/pp/Controller/evennementC.php");
$evennementC = new evennementC();
$listeevennement=$evennementC->afficherevennement();
$categories=$evennementC->afficher_cat();
$categories1=$evennementC->afficher_cat();
if (isset($_POST['nom_ev']) && isset($_POST['date_ev']) && isset($_POST['lieu']) && isset($_POST['image']) )
{  
 $id_ev=$_POST['id_ev'];
  $nom_ev=$_POST['nom_ev'];
  $date=$_POST['date_ev'];
  $lieu=$_POST['lieu'];
  $image=$_POST['image'];
  $categorie=$_POST['categorie'];
  //var_dump($_POST['categorie']);
  //var_dump($categorie);
  
  $evennement= new evennement($id_ev,$date,$nom_ev,$lieu,$image);
  $evennementC=new evennementC();
  $evennementC->ajouterevennement($evennement,$categorie);
   
  //mail($Mail,"Recrutement"," bonjour $Nom $Prenom Vous avez été recruté ");
  
  
  }
  else
  {
    echo "chercher un evenement";
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
<body>
<section class="section video" data-section="section5">
    <div class="container">
      <div class="container">
  
            <div class="card-body">
                  <h4 class="card-title" style="color:white">RECHERCHE EVENEMENTS</h4>
                  <p class="card-description" style="color:white">
                    tapez <code>le critere</code> souhaité pour filtrer vos evenements
                  </p>
                  <form class="form-inline" action="#" method="post">
                    
                    <input type="text" class="form-control mb-2 mr-sm-2"  placeholder="Nom Evenement" name="nomr">
                  
                    
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="mdi mdi-calendar-clock"></i></div>
                      </div>
                      <input type="date" class="form-control"  placeholder="Date Evenement" name="dater">
                    </div>
                      
                    

                     <select class="form-control mb-2 mr-sm-2" placeholder="lieu" name="lieur">
                      <option value="">lieu</option>
                  <option value="hammamet">hammamet</option>
                 <option value="sousse">sousse</option>
                   <option value="tabarka">tabarka</option>
                   <option value="monastir">monastir</option>
                     <option value="tunis">tunis</option>
                       <option value="mahdia">mahdia</option>
                         <option value="jerba">jerba</option>
                            <option value="kelibia">kelibia</option>
                               <option value="tozeur">tozeur</option>
                      </select>




                    <select class="form-control mb-2 mr-sm-2"  placeholder="categorie" name="categorier">
                      <option value="">categorie</option>
                       <?php foreach ($categories1 as $row) { ?>
                        <option value="<?php echo $row['nom_catevent'] ?>"><?php echo $row['nom_catevent'] ?></option>
                        <?php } ?>
                      </select>  

                    <div class="form-check mx-sm-2">
                      <label style="color:white" class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="actuelr">
                        actuels
                      </label>
                    </div>


                     <div class="form-check mx-sm-2">
                      <label  style="color:white"class="form-check-label">
                        <input  type="checkbox" class="form-check-input" name="tridater">
                        tri date
                      </label>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2" style="margin-left: 790px" name="rechercher">rechercher</button>
                  </form>
                </div>

              <?php 

                        if(isset($_POST['rechercher']))
                        {

                          $nomr=$_POST['nomr'];
                          $dater=$_POST['dater'];
                          $lieur=$_POST['lieur'];
                          $categorier=$_POST['categorier'];
                          $actuelr="";
                          $tridater="";
                          if(isset($_POST['actuelr']))
                          {$actuelr=$_POST['actuelr'];}

                         if(isset($_POST['tridater']))
                          {$tridater=$_POST['tridater'];}

                          
                         $listeevennement=$evennementC->rechercherevennement($nomr,$dater,$lieur,$categorier,$actuelr,$tridater);
                        }
               ?>
        
            <div class="col-lg-12 stretch-card">

              <div class="card">
               


                <div class="card-body">
                  <!--ici-->
                  
                  <h4 class="card-title">Evenements a venir </h4>
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          
                          <th>
                          Id 
                        </th>
                          <th>
                            Nom 
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Lieu
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Categorie
                          </th>

                        </tr>
                      </thead>
                      <tbody>
                    
                      <?php foreach($listeevennement as $evennement): ?>
   <tr>
    
     <td> <a href="#"><?= $evennement->id_ev; ?></a> </td>
     <td> <?= $evennement->nom_ev; ?> </td>
     <td> <?= $evennement->date_ev; ?> </td>
     <td><a href="../back/pages/EventCat/carte.php?lieu=<?= $evennement->lieu; ?>"><i class="mdi mdi-map-marker-multiple"></i><?= $evennement->lieu; ?></a></td>
     <td><img  src="images/<?= $evennement->image_ev; ?>" title="cliquez pour agrandir" style="width: 60px;height: 60px;cursor: pointer;" 
      onclick="$('#image_div').toggle().attr('src',$(this).attr('src'));"> </td>

      <td><?= $evennement->nom_catevent; ?></td>
    

    

     
   </tr>
</tbody>
   <?php endforeach; ?></tbody>
                    </table>
                  </div>
                </div>
                <center><img src="" height="300px" width="300px" style="display: none" onclick="$(this).hide() " id="image_div" class=" w3-animate-zoom" ></center>
              </div>

            </div>

          </div>
        </div>
         
        
        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->



  
</body>

</html>