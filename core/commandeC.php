<?PHP
include "config.php";
//include "../entities/commande.php";


class commandeC {
function affichercommande ($commande){
        echo "id: ".$commande->getId()."<br>";
        echo "ville: ".$commande->getville()."<br>";
        echo "adresse: ".$commande->getadresse()."<br>";
        echo "nomProduit: ".$commande->getnomProduit()."<br>";
        echo "modeP: ".$commande->getmodeP()."<br>";

    }

    function ajoutercommande($commande)
    {
        $sql="insert into commande
        (id,ville,adresse,nomProduit,modeP) 
        values (:id, :ville,:adresse ,:nomProduit ,:modeP)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);

        $id=$commande->getId();
        $ville=$commande->getville();
        $adresse=$commande->getadresse();
        $nomProduit=$commande->getnomProduit();
        $modeP=$commande->getmodeP();
        $req->bindValue(':id',$id);
        $req->bindValue(':ville',$ville);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':nomProduit',$nomProduit);
        $req->bindValue(':modeP',$modeP);


            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
	
	function affichercommandes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercommande($id){
		$sql="DELETE FROM commande where id= :id";
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
	function modifiercommande($commande,$id){
		$sql="UPDATE commande SET id=:idd, ville=:ville,adresse=:adresse, nomProduit=:nomProduit, modeP=:modeP WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $idd=$commande->getId();
        $ville=$commande->getville();
        $adresse=$commande->getadresse();
        $nomProduit=$commande->getnomProduit();
        $modeP=$commande->getmodeP();
        $datas = array(':idd'=>$idd, ':id'=>$id, ':ville'=>$ville,':adresse'=>$adresse,':nomProduit'=>$nomProduit,':modeP'=>$modeP);
        $req->bindValue(':idd',$idd);
        $req->bindValue(':id',$id);
        $req->bindValue(':ville',$ville);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':nomProduit',$nomProduit);
		$req->bindValue(':modeP',$modeP);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommande($id){
		$sql="SELECT * from commande where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecommandes($id){
		$sql="SELECT * from commande where date =$id";
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