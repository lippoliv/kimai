<?php
/**
 * This file is part of
 * Kimai - Open Source Time Tracking // http://www.kimai.org
 * (c) 2006-2013 Kimai-Development-Team
 *
 * Kimai is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; Version 3, 29 June 2007
 *
 * Kimai is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Kimai; If not, see <http://www.gnu.org/licenses/>.
 */
	/**
	 * Represents information about Adresses
	 * 
	 * @author	Oliver Lippert
	 */
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
		
		/**
		 * Returns the Contact-Name
		 * 
		 * @return	string	the Contact-Name
		 * 
		 * @author	Oliver Lippert
		 */
		public function getContact(){
			return $this->Contact;
		}
		
		/**
		 * Defines the Contact-Name
		 * 
		 * @param	string	the Contact-Name
		 * 
		 * @author	Oliver Lippert
		 */
		public function setContact($Contact){
			$this->Contact = $Contact;
		}
		
		/**
		 * Returns the Street-Name of the Adress
		 * 
		 * @return	string	the Street-Name
		 * 
		 * @author	Oliver Lippert
		 */
		public function getStreet(){
			return $this->Street;
		}
		
		/**
		 * Defines the Street-Name of the Adress
		 * 
		 * @param	string	the Street-Name
		 * 
		 * @author	Oliver Lippert
		 */
		public function setStreet($Street){
			$this->Street = $Street;
		}
		
		/**
		 * Returns the ZIP-Code of the Adress
		 * 
		 * @return	string	the ZIP-Code
		 * 
		 * @author	Oliver Lippert
		 */
		public function getZipcode(){
			return $this->ZIP;
		}
		
		/**
		 * Defines the ZIP-Code of the Adress
		 * 
		 * @param	string	the ZIP-Code
		 * 
		 * @author	Oliver Lippert
		 */
		public function setZipcode($ZIP){
			$this->ZIP = $ZIP;
		}
		
		/**
		 * Returns the City of the Adress
		 * 
		 * @return	string	the City
		 * 
		 * @author	Oliver Lippert
		 */
		public function getCity(){
			return $this->City;
		}
		
		/**
		 * Defines the City of the Adress
		 * 
		 * @param	string	the City
		 * 
		 * @author	Oliver Lippert
		 */
		public function setCity($City){
			$this->City = $City;
		}
		
		/**
		 * Returns the Phone-Number of the Adress
		 * 
		 * @return	string	the Phone-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function getPhone(){
			return $this->Phone;
		}
		
		/**
		 * Defines the Phone-Number of the Adress
		 * 
		 * @param	string	the Phone-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function setPhone($Phone){
			$this->Phone = $Phone;
		}
		
		/**
		 * Returns the Fax-Number of the Adress
		 * 
		 * @return	string	the Fax-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function getFax(){
			return $this->Fax;
		}
		
		/**
		 * Defines the Fax-Number of the Adress
		 * 
		 * @param	string	the Fax-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function setFax($Fax){
			$this->Fax = $Fax;
		}
		
		/**
		 * Returns the Mobile-Number of the Adress
		 * 
		 * @return	string	the Mobile-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function getMobile(){
			return $this->Mobile;
		}
		
		/**
		 * Defines the Mobile-Number of the Adress
		 * 
		 * @param	string	the Mobile-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function setMobile($Mobile){
			$this->Mobile = $Mobile;
		}
		
		/**
		 * Returns the Mail-Adress of the Adress
		 * 
		 * @return	string	the Mail-Adress
		 * 
		 * @author	Oliver Lippert
		 */
		public function getMail(){
			return $this->Mail;
		}
		
		/**
		 * Defines the Mail-Adress of the Adress
		 * 
		 * @param	string	the Mail-Adress
		 * 
		 * @author	Oliver Lippert
		 */
		public function setMail($Mail){
			$this->Mail = $Mail;
		}
		
		/**
		 * Returns the Web-Adress of the Adress
		 * 
		 * @return	string	the Web-Adress
		 * 
		 * @author	Oliver Lippert
		 */
		public function getWeb(){
			return $this->Web;
		}
		
		/**
		 * Defines the Web-Adress of the Adress
		 * 
		 * @param	string	the Web-Adress
		 * 
		 * @author	Oliver Lippert
		 */
		public function setWeb($Web){
			$this->Web = $Web;
		}

		/**
		 * Returns all the Adress-Propertys in an simple String
		 *
		 * @return	string	all Adress-Propertys
		 */
		public function toString(){
			return $this->getContact() ."<br />". $this->getStreet() ."<br />". $this->getZipcode() ." ". $this->getCity() ."<br />TEL ". $this->getPhone() ."<br />MOB ". $this->getMobile() ."<br />FAX ". $this->getFax() ."<br />WWW ". $this->getWeb() ."<br />MAIL ". $this->getMail();
		}
	}
?>