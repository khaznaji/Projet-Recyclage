<?php
require_once ("C:/xampp/htdocs/pp/config.php");
    class ParticipantC{
        public function afficherParticipants() {
           
            try{
                $pdo=config::getConnexion();
                $query= $pdo ->prepare(
                    'SELECT * FROM participant'
                );
                $query->execute();
                $result = $query->fetchAll();
            }
            catch(PDOException $e){
                $e->getMessage();
            }
            echo("<table border='1' align='center'><tr>");
            echo ("<td>");
            echo "ID";
            echo ("</td>");
            echo ("<td>");
            echo "CIN";
            echo ("</td>");
                echo ("<td>");
                echo "Nom";
                echo ("</td>");
                echo ("<td>");
                echo "Prenom";
                echo ("</td>");
                echo ("<td>");
                echo "Telephone";
                echo ("</td>");
                echo ("<td>");
                echo "Adresse";
                echo ("</td>");
                echo ("<td>");
                echo "Email";
                echo ("</td>");
                echo ("<td>");
                echo "titre";
                echo ("</td>");
                echo ("<td>");
                echo "LOGIN";
                echo ("</td>");
                echo ("</td>");echo ("<td>");
                echo "Password";
                echo ("</td>");
                echo ("<td>");
                echo "MODIFIER";
                echo ("</td>");
                echo ("<td>");
                echo "SUPPRIMER";
                echo ("</td>");
                echo "</tr>";

            foreach($result as $rows)
            {
            echo ("<tr><td>");
            echo $rows['id'];
            echo ("</td>");
            echo ("<td>");
            echo $rows['CIN'];
            echo ("</td>");
                echo ("<td>");
                echo $rows['nom'];
                echo ("</td>");
                echo ("<td>");
                echo $rows['prenom'];
                echo ("</td>");
                echo ("<td>");
                echo $rows['telephone'];
                echo ("</td>");
                echo ("<td>");
                echo $rows['adresse'];
                echo ("</td>");
                echo ("<td>");
                echo $rows['email'];
                echo ("</td>");
                echo ("<td>");
                echo $rows['titre'];
                echo ("</td>");
                echo ("<td>");
                echo $rows['login'];
                echo ("</td>");
                echo ("</td>");
                echo ("<td>");
                echo $rows['password'];
                echo ("</td>");
                echo ("<td>");
                echo("<a href=../Controller/modifierparticipant.php?id=".$rows['id']." >Modifier</a>");
                echo ("</td>");
                echo ("<td>");
                echo("<a href=../Controller/supprimerparticipant.php?id=".$rows['id']." >Supprimer</a>");
                echo ("</td>");
            echo("</tr>");
        }
    echo("</table> ");
        }
        public  function unique_log($ch) {
            $participantC=new ParticipantC();
            $pdo=config::getConnexion();
                $query= $pdo ->prepare('SELECT * from participant where login = :login ');
                $query->execute(['login' => $ch]);
                 $result = $query->fetchAll();
                 foreach($result as $rows)
                 {
                 if($rows['login'] !== $ch) {
                     return false;
                 }
                  else true;
                 } 
             
         
     } 

        public function ajouterParticipant($Participant) {
    $sql="insert into participant(CIN,nom,prenom,telephone,email,login,password,titre,adresse) values(:CIN,:nom,:prenom,:telephone,:email, :login, :password, :titre, :adresse)";
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->execute([
                    'CIN' => $Participant->getCIN(),
					'nom' => $Participant->getNom(),
                    'prenom' => $Participant->getPrenom(),
                    'telephone' => $Participant->getTelephone(),
                    'email' => $Participant->getEmail(),
					'login' => $Participant->getLogin(),
                    'password' => $Participant->getPassword(),
                    'titre' => $Participant->getTitre(),
					'adresse' => $Participant->getAdresse()
                    
				]); 
    	}
     
        public function supprimerparticipant($id) {
    		$sql='delete  from participant where id= :id';
    		$db=config::getConnexion();
    		$query=$db->prepare($sql);
    		$query->execute([
					'id' => $id]);
        }
        public function modifierparticipant($CIN,$nom,$prenom,$telephone,$email,$login,$password,$titre,$adresse,$id) {
            $sql="update participant SET 
                                CIN = :CIN,
                                nom = :nom, 
                                prenom = :prenom,
                                telephone = :telephone,
                                email = :email,
                                login = :login,
                                password = :password,
                                titre = :titre,
                                adresse = :adresse
                                WHERE id = :id";
            $db=config::getConnexion(); 
            $query=$db->prepare($sql);
            $query->execute([
                            'CIN' => $CIN,
                            'nom' => $nom,
                            'prenom' => $prenom,
                            'telephone' => $telephone,
                            'email' => $email,
                            'login' => $login,
                            'password' => $password,
                            'titre' => $titre,
                            'adresse' => $adresse,
                            'id' => $id
                        ]); 
            }
            public function modifiercompte($CIN,$nom,$prenom,$telephone,$email,$login,$password,$titre,$adresse) {
                $sql="update participant SET 
                                    CIN = :CIN,
                                    nom = :nom, 
                                    prenom = :prenom,
                                    telephone = :telephone,
                                    email = :email,
                                    password = :password,
                                    titre = :titre,
                                    adresse = :adresse
                                    WHERE login = :login";
                $db=config::getConnexion(); 
                $query=$db->prepare($sql);
                $query->execute([
                                'CIN' => $CIN,
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'telephone' => $telephone,
                                'email' => $email,
                                'login' => $login,
                                'password' => $password,
                                'titre' => $titre,
                                'adresse' => $adresse                            ]); 
                }

            function connexionUser($login,$password){
                $sql="SELECT * FROM participant WHERE login='" . $login . "' and password = '". $password."'";
                $db = config::getConnexion();
                try{
                    $query=$db->prepare($sql);
                    $query->execute();
                    $count=$query->rowCount();
                    if($count==0) {
                        $message = "le login ou le mot de passe est incorrect";
                    } else {
                        $x=$query->fetch();
                        $message = $x['titre'];
                    }
                }
                catch (Exception $e){
                        $message= " ".$e->getMessage();
                }
              return $message;
            }
           
    }