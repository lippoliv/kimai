<?php
	class Adress{
		private $Contact;
		private $Street;
		private $ZIP;
		private $City;
		private $Phone;
		private $Fax;
		private $Mobile;
		private $Mail;
		private $Web;
		
		public function getContact(){
			return $this->Contact;
		}
		
		public function setContact($Contact){
			$this->Contact = $Contact;
		}
		
		public function getStreet(){
			return $this->Street;
		}
		
		public function setStreet($Street){
			$this->Street = $Street;
		}
		
		public function getZipcode(){
			return $this->ZIP;
		}
		
		public function setZipcode($ZIP){
			$this->ZIP = $ZIP;
		}
		
		public function getCity(){
			return $this->City;
		}
		
		public function setCity($City){
			$this->City = $City;
		}
		
		public function getPhone(){
			return $this->Phone;
		}
		
		public function setPhone($Phone){
			$this->Phone = $Phone;
		}
		
		public function getFax(){
			return $this->Fax;
		}
		
		public function setFax($Fax){
			$this->Fax = $Fax;
		}
		
		public function getMobile(){
			return $this->Mobile;
		}
		
		public function setMobile($Mobile){
			$this->Mobile = $Mobile;
		}
		
		public function getMail(){
			return $this->Mail;
		}
		
		public function setMail($Mail){
			$this->Mail = $Mail;
		}
		
		public function getWeb(){
			return $this->Web;
		}
		
		public function setWeb($Web){
			$this->Web = $Web;
		}
		
		public function toString(){
			return $this->getContact() ."<br />". $this->getStreet() ."<br />". $this->getZipcode() ." ". $this->getCity() ."<br />TEL ". $this->getPhone() ."<br />MOB ". $this->getMobile() ."<br />FAX ". $this->getFax() ."<br />WWW ". $this->getWeb() ."<br />MAIL ". $this->getMail();
		}
	}
?>