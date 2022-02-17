<?php

include "connection.php";

class evennementC
{
    function afficherevennement()
    {
        $db = config::getConnexion();
        $sql="SELECT * FROM evennements inner join catevent on evennements.id_cat=catevent.id_catevent ";
        try{
            $req=$db->prepare($sql);
            $req->execute();
            $evennement=$req->fetchALL(PDO::FETCH_OBJ);
            return $evennement;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        
    }


    function rechercherevennement($nom,$datee,$lieu,$categorie,$actuel,$tridate)
    {
        $db = config::getConnexion();
        $sql="SELECT * FROM evennements inner join catevent on evennements.id_cat=catevent.id_catevent where 1=1 ";
        if(!empty($nom))
        {
            $sql="$sql and nom_ev='$nom'";
        }

        if(!empty($datee))
        {
            $sql="$sql and date_ev='$datee'";
        }

        if(!empty($lieu))
        {
            $sql="$sql and lieu='$lieu'";
        }

         if(!empty($categorie))
        {
            $sql="$sql and nom_catevent='$categorie'";
        }

        if(!empty($actuel))
        {
            $sql="$sql and date_ev>=sysdate()";
        }

         if(!empty($tridate))
        {
            $sql="$sql order by date_ev";
        }

        
       // var_dump($sql);
        try{
            $req=$db->prepare($sql);
            $req->execute();
            $evennement=$req->fetchALL(PDO::FETCH_OBJ);
            return $evennement;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        
    }

    function Supprimmerevennement($id_ev)
    {
        $sql="DELETE  from evennements where id_ev=$id_ev";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function ajouterevennement($evennement,$categorie)
{
    //var_dump($evennement);

  //$sql="INSERT INTO evennements (id_ev,nom_ev,date_ev,lieu,image) VALUES(null,:nom_ev,:date_ev,:lieu,:image)";
    $sql="INSERT INTO `evennements` (`id_ev`, `date_ev`, `lieu`, `image_ev`, `nom_ev`,`id_cat`) VALUES (NULL,:date_ev,:lieu,:image,:nom_ev,$categorie); ";
  $db = config::getConnexion();
  try{

        $req=$db->prepare($sql);
        
        $nom_ev=$evennement->get_nom_ev();
        $datee=$evennement->get_date_ev();
        $lieu=$evennement->get_lieu();
        $image=$evennement->get_image_ev();
     


$req->bindValue(':nom_ev',$nom_ev);
$req->bindValue(':date_ev',$datee);
$req->bindValue(':lieu',$lieu);
$req->bindValue(':image',$image);

            if($req->execute())
            {
            echo "data inserted successul";
                     header("Location:basic-table.php");
                 
            }
        }
    catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
}



/*
function ajouterevennement($evennement){
    $sql="INSERT INTO evennement (id_ev,nom_ev,date,lieu,image) 
    VALUES(:id_ev,:nom_ev,:date,:lieu,:image)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'id_ev' => $evennements->getid_ev(),
            'nom_ev' => $evennement->getnom_ev(),
            'date' => $evennement->getdate(),
            'lieu' => $evennement->getlieu(),
            'image' => $evennement->getimage(),
           
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }			
}
   
*/


function modifierevennement($evennement,$id_ev)
    {
        $db = config::getConnexion();
        $sql="UPDATE evennements SET nom_ev=:nom_ev,lieu=:lieu,image_ev=:image,date_ev=:date_ev where id_ev=$id_ev";
        var_dump($sql);
        var_dump($sql);
        try{

        $req=$db->prepare($sql);        
        
        $date_ev=$evennement->get_date_ev();
        $lieu=$evennement->get_lieu();
        $image_ev=$evennement->get_image_ev();
        $nom_ev=$evennement->get_nom_ev();
      
        
        $req->bindValue(':date_ev',$date_ev);
        
        $req->bindValue(':image',$image_ev);
        $req->bindValue(':nom_ev',$nom_ev);
        $req->bindValue(':lieu',$lieu);
      


           if( $req->execute())
           {
            header('Location: basic-table.php');  
           }
           else
           header('Location: basic-table.php');
        }
        catch (Exception $e)
        {

            echo 'Erreur: '.$e->getMessage();
        }
    }



function even_details($id_ev){

    $sql="SELECT *  FROM evennements  where id_ev = $id_ev";
    $db = config::getConnexion();
    try{
    $evennement=$db->query($sql);
    return $evennement;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }



}


function stat(){

    $sql="select lieu as lieu,count(*)as evenement FROM evennements GROUP by lieu";
    $db = config::getConnexion();
    try{
    $evennement=$db->query($sql);
    return $evennement;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }





}




function afficher_cat(){

    $sql="SELECT * FROM `catevent`";
    $db = config::getConnexion();
    try{
    $evennement=$db->query($sql);
    return $evennement;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }





}



}



?>