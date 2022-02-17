<?php

include "connection.php";


class cateventC{

    function affichercatevent()
    {
        $db = config::getConnexion();
        $sql="SELECT *FROM catevent";
        try{
            $req=$db->prepare($sql);
            $req->execute();
            $catevent= $req->fetchALL(PDO::FETCH_OBJ);
            return $catevent;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
    }
    function Supprimmercatevent($id_catevent)
    {
        $sql="DELETE  from catevent where id_catevent=$id_catevent";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function ajoutercatevent($catevent)
{

  $sql="INSERT INTO catevent (nom_catevent) VALUES(:nom_catevent)";
  $db = config::getConnexion();
  try{
        $req=$db->prepare($sql);
        
        $nom_catevent=$catevent->get_nom_catevent();
     


$req->bindValue(':nom_catevent',$nom_catevent);

            if($req->execute())
            {
            echo "data insrted successul";
                     header("Location:tablecat.php");
                 
            }
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
}

function modifiercatevent($catevent,$id_catevent)
    {
        $db = config::getConnexion();
        $sql="UPDATE catevent SET id_catevent=:id_catevent,nom_catevent=:nom_catevent 
       
        where id_catevent=$id_catevent";
        try{

        $req=$db->prepare($sql);        
        $id_catevent=$catevent->get_idcatevent();

        $nom_catevent=$catevent->get_nom_catevent();
      
       
      


           if( $req->execute())
           {
           // header('Location: basic-table.php');  
           }
           else
           header('Location: basic-table.php');
        }
        catch (Exception $e)
        {

            echo 'Erreur: '.$e->getMessage();
        }
    }






}
?>