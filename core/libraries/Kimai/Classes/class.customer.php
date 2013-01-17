<?php
	class Customer{
		private $ID;
		private $Name;
		private $Comment;
		private $Visible;
		private $Company;
		private $Deleted;
		
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
		
		public function toString(){
			return "#". $this->getID() .": ". $this->getName() ." works for '". $this->getCompany() ."' and has the comment '". $this->getComment() ."' and visible:". $this->isVisible() ." and deleted:". $this->isDeleted();
		}
	}
?>