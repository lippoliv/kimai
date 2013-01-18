<?php
	include_once 'class.adress.php';
	
	class Customer{
		private $ID;
		private $Name;
		private $Comment;
		private $Visible;
		private $Company;
		private $Deleted;
		private $Adress;
		
		public function getID(){
			return $this->ID;
		}
		
		public function setID($ID){
			$this->ID = $ID;
		}
		
		public function getName(){
			return $this->Name;
		}
		
		public function setName($Name){
			$this->Name = $Name;
		}
		
		public function getComment(){
			return $this->Comment;
		}
		
		public function setComment($Comment){
			$this->Comment = $Comment;
		}
		
		public function isVisible(){
			return $this->Visible;
		}
		
		public function setVisible($Visible){
			$this->Visible = $Visible;
		}
		
		public function getCompany(){
			return $this->Company;
		}
		
		public function setCompany($Company){
			$this->Comment = $Company;
		}
		
		public function isDeleted(){
			return $this->Deleted;
		}
		
		public function setDeleted($Deleted){
			$this->Deleted = $Deleted;
		}
		
		public function getAdress(){
			return $this->Adress;
		}
		
		public function setAdress($Adress){
			$this->Adress = $Adress;
		}
		
		public function toString(){
			return "<div>#". $this->getID() .": ". $this->getName() ."<br />COMPANY ". $this->getCompany() ."<br />COMMENT ". $this->getComment() ."<br />VISIBLE ". $this->isVisible() ."<br />DELETED ". $this->isDeleted() ."<br>ADRESS ". $this->getAdress()->toString() ."</div>";
		}
	}
?>