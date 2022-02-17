<?php 
require_once ("C:/xampp/htdocs/pp/Model/sevice.php");
require_once ("C:/xampp/htdocs/pp/Controller/servicec.php");
if(!isset($_POST['id_produit'])||!isset($_POST['nom'])||!isset($_POST['mdp'])||!isset($_POST['email']))
{
	echo "erreur de ";
}
$profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
        // Upload image only if no errors
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
$service=new  userr( $_POST['id_produit'],$_POST['nom'], $_POST['mdp'],$_POST['email'], $profileImageName);


$produitc=new servic();
$produitc->Modifierser($service);
header('location:index.php');
}







?>