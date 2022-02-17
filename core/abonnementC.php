<?PHP
include "config.php";
//include "../entities/abonnement.php";


class abonnementC {
function afficherabonnement ($abonnement){
        echo "id: ".$abonnement->getId()."<br>";
        echo "offre: ".$abonnement->getoffre()."<br>";
        echo "prix: ".$abonnement->getPrix()."<br>";

    }

    function ajouterabonnement($abonnement)
    {
        $sql="insert into abonnement
        (id,offre,prix) 
        values (:id, :offre,:prix)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);

        $id=$abonnement->getId();
        $offre=$abonnement->getoffre();
        $prix=$abonnement->getPrix();
        $req->bindValue(':id',$id);
        $req->bindValue(':offre',$offre);
        $req->bindValue(':prix',$prix);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
	
	function afficherabonnements(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From abonnement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerabonnement($id){
		$sql="DELETE FROM abonnement where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierabonnement($abonnement,$id){
		$sql="UPDATE abonnement SET id=:idd, offre=:offre,prix=:prix WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$abonnement->getId();
        $offre=$abonnement->getoffre();
        $prix=$abonnement->getPrix();
        $datas = array(':idd'=>$idd, ':id'=>$id, ':offre'=>$offre,':prix'=>$prix);
        $req->bindValue(':idd',$idd);
        $req->bindValue(':id',$id);
		$req->bindValue(':offre',$offre);
		$req->bindValue(':prix',$prix);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererabonnement($id){
		$sql="SELECT * from abonnement where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeabonnements($id){
		$sql="SELECT * from abonnement where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}


?>