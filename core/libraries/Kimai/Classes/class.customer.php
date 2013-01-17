<?php
	class Customer{
		private $ID;
		
		public function getID(){
			return $this->ID;
		}
		
		public function setID($ID){
			$this->ID = $ID;
		}
		
		public function toString(){
			return $this->getID();
		}
	}
?>