<?php 
require_once ("C:/xampp/htdocs/pp/Model/sevice.php");
require_once ("C:/xampp/htdocs/pp/Controller/servicec.php");

if(!isset($_POST['Nom'])||!isset($_POST['Mdp'])||!isset($_POST['Email']));
{
	echo "erreur de ";
}


$ser=new user($_POST['Nom'],$_POST['Mdp'],$_POST['Email']);


$serc=new servic();
$serc->Ajouter($ser);
header('location:http://localhost/pp/login.php');

?>