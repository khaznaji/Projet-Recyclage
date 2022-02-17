<?php 
	class Response {
		private $idResponse;
		private $content;
		private $publisher;
		private $createdDate;
		private $idComment;


		function __construct($___0, $___1, $___2, $___3, $___4) {
			$this->idResponse = $___0;
			$this->publisher = $___1;
			$this->content = $___2;
			$this->createdDate = $___3;
			$this->idComment = $___4;
		}

		function getIdComment() {
			return $this->idComment;
		}

		function setIdComment($idComment) {
			$this->idComment = $idComment;
		}

		function getIdResponse() {
			return $this->idResponse;
		}

		function setIdResponse($idResponse) {
			$this->idResponse = $idResponse;
		}

		function getContent() {
			return $this->content;
		}

		function setContent($content) {
			$this->content = $content;
		}

		function getPublisher() {
			return $this->publisher;
		}

		function setPublisher($publisher) {
			$this->publisher = $publisher;
		}

		function getCreatedDate() {
			return $this->createdDate;
		}

		function setCreatedDate($createdDate) {
			$this->createdDate = $createdDate;
		}
	}

 ?>