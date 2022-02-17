<!DOCTYPE html>
<html>

<?php 
include_once 'connection.php';
class servic{
	function afficherservice(){
		$sql="SELECT * FROM users";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	}
	   function supprimerservice($numadh){
 $sql="DELETE  FROM users WHERE `id`= $numadh ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
			die("erreur:".$e->getMessage());
   }
}
function Modifierser($ser)
{

$sqlc= "UPDATE `users` SET user_name=:name,password=:mdp,email=:mail, profile_image=:profileImage WHERE id=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([ 'name'=>$ser->getname(),
		            'mdp' =>$ser->getmdp(),
		            'mail' =>$ser->getemail(),
		            'id'    =>$ser->getid(),
		            'profileImage' =>$ser->getProfileImage(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

}
function Ajouter($ser){
$sql= "INSERT INTO `users` (`user_name`,`password`,`email`,`type`) VALUES (:nom, :mdp, :email,'client')";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([ 
		   
		            'nom'=>$ser->getname(),
		            'mdp'=>$ser->getmdp(),
		            'email'=>$ser->getemail(),

		       



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}
function tri(){
		$sql="SELECT * FROM users order by user_name";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	}
}
?>
</html>
