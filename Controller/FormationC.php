<?PHP
include_once "connection.php";
class FormationC{

    function ajouterFormation($formation){
        $sql="INSERT INTO formation (titre, pdp, prix, video, desp) VALUES (:titre, :pdp, :prix, :video ,:desp)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $titre=$formation->gettitre();
            $pdp=$formation->getPdp();
            $prix=$formation->getprix();
            $video=$formation->getvideo(); 
          
            $desp=$formation->getdesp();
            $req->bindValue(':titre',$titre);
            $req->bindValue(':pdp',$pdp); 
            $req->bindValue(':prix',$prix);
            $req->bindValue(':video',$video); 
         
            $req->bindValue(':desp',$desp);
            
            $req->execute();
        }catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
    }  
    function afficherFormation(){
        $sql="SELECT * From formation";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
    function supprimerFormation($id){
        $sql="DELETE FROM formation where id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        } 

    }  

    function modifierFormation($formation,$id){
        $sql="UPDATE formation SET titre=:titre, pdp=:pdp, video=:video, prix=:prix ,desp=:desp WHERE id=:id";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $titre=$formation->gettitre();
            $pdp=$formation->getPdp();
            $prix=$formation->getprix();
            $video=$formation->getvideo(); 
           
            $desp=$formation->getdesp();
            $datas = array(':id'=>$id,':titre'=>$titre , ':pdp'=>$pdp, ':prix'=>$prix, ':video'=>$video, ':desp'=>$desp);

            $req->bindValue(':titre',$titre);
            $req->bindValue(':pdp',$pdp); 
            $req->bindValue(':prix',$prix);
            $req->bindValue(':video',$video); 
        
            $req->bindValue(':desp',$desp);
            $s=$req->execute();
        }catch(Exception $e){
            echo "Erreur : ".$e->getMessage(); 
            echo "Les Datas : " ;
            print_r($datas);
            
            die;
        }
    } 
    function recupererFormation($id){
		$sql="SELECT * from formation where id='".$id."' ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die(    'Erreur: '.$e->getMessage());
        }
    }
    function afficherFormationTrie(string $selon){
        $sql="select * from formation order by ".$selon."";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
    }
    public function afficherFormationRech(string $rech1,string $selon)
    {
        $sql="select * from formation where $selon like '".$rech1."%'";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
} 

?> 