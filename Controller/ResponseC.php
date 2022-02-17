<?php 
	include_once "connection.php";

	class ResponseC {

		function getResponses($__id) {
			$sql = "SELECT * FROM response WHERE idComment = " . $__id . " ORDER BY createdDate ASC ";
			$db = config::getConnexion();
			try {
				return $db->query($sql);
			} catch (Exception $e) {
				die("Erreur: ".$e->getMessage());
			}
		}

		function insertResponse($response) {
			$sql = "INSERT INTO response (content, publisher, createdDate, idComment) VALUES (:content, :publisher, :createdDate, :idComment)";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->bindValue(':content',$response->getContent());
				$req->bindValue(':publisher',$response->getPublisher());
				$req->bindValue(':createdDate',$response->getCreatedDate());
				$req->bindValue(':idComment',$response->getIdComment());
				$req->execute();
				return $db->lastInsertId();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

		function searchResponse($__input, $__id) {
			$sql = "SELECT * FROM response WHERE idComment = $__id AND ( publisher LIKE :publisher OR content LIKE :content OR createdDate LIKE :createdDate )";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->bindValue(':content', "%". $__input ."%");
				$req->bindValue(':publisher', "%". $__input ."%");
				$req->bindValue(':createdDate', "%". $__input ."%");
				$req->execute();
				return $req->fetchAll();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

	}

 ?>