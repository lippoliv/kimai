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
	 * Represents information about Addresses
	 * 
	 * @author	Oliver Lippert
	 */
	class Address{
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
		 * Returns the Street-Name of the Address
		 * 
		 * @return	string	the Street-Name
		 * 
		 * @author	Oliver Lippert
		 */
		public function getStreet(){
			return $this->Street;
		}
		
		/**
		 * Defines the Street-Name of the Address
		 * 
		 * @param	string	the Street-Name
		 * 
		 * @author	Oliver Lippert
		 */
		public function setStreet($Street){
			$this->Street = $Street;
		}
		
		/**
		 * Returns the ZIP-Code of the Address
		 * 
		 * @return	string	the ZIP-Code
		 * 
		 * @author	Oliver Lippert
		 */
		public function getZipcode(){
			return $this->ZIP;
		}
		
		/**
		 * Defines the ZIP-Code of the Address
		 * 
		 * @param	string	the ZIP-Code
		 * 
		 * @author	Oliver Lippert
		 */
		public function setZipcode($ZIP){
			if(intval($ZIP) != 0){
				$this->ZIP = $ZIP;
			}
		}
		
		/**
		 * Returns the City of the Address
		 * 
		 * @return	string	the City
		 * 
		 * @author	Oliver Lippert
		 */
		public function getCity(){
			return $this->City;
		}
		
		/**
		 * Defines the City of the Address
		 * 
		 * @param	string	the City
		 * 
		 * @author	Oliver Lippert
		 */
		public function setCity($City){
			$this->City = $City;
		}
		
		/**
		 * Returns the Phone-Number of the Address
		 * 
		 * @return	string	the Phone-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function getPhone(){
			return $this->Phone;
		}
		
		/**
		 * Defines the Phone-Number of the Address
		 * 
		 * @param	string	the Phone-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function setPhone($Phone){
			//Convert +49 to 0049, so its checkable through intval
			$MyPhone = str_replace("+", "00", $Phone);
			
			if(intval($MyPhone) != 0){
				$this->Phone = $Phone;
			}
		}
		
		/**
		 * Returns the Fax-Number of the Address
		 * 
		 * @return	string	the Fax-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function getFax(){
			return $this->Fax;
		}
		
		/**
		 * Defines the Fax-Number of the Address
		 * 
		 * @param	string	the Fax-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function setFax($Fax){
			//Convert +49 to 0049, so its checkable through intval
			$MyFax = str_replace("+", "00", $Fax);
			
			if(intval($MyFax) != 0){
				$this->Fax = $Fax;
			}
		}
		
		/**
		 * Returns the Mobile-Number of the Address
		 * 
		 * @return	string	the Mobile-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function getMobile(){
			return $this->Mobile;
		}
		
		/**
		 * Defines the Mobile-Number of the Address
		 * 
		 * @param	string	the Mobile-Number
		 * 
		 * @author	Oliver Lippert
		 */
		public function setMobile($Mobile){
			$this->Mobile = $Mobile;
		}
		
		/**
		 * Returns the Mail-Address of the Address
		 * 
		 * @return	string	the Mail-Address
		 * 
		 * @author	Oliver Lippert
		 */
		public function getMail(){
			return $this->Mail;
		}
		
		/**
		 * Defines the Mail-Address of the Address
		 * 
		 * @param	string	the Mail-Address
		 * 
		 * @author	Oliver Lippert
		 */
		public function setMail($Mail){
			if(filter_var($Mail, FILTER_VALIDATE_EMAIL)){
				$this->Mail = $Mail;
			}
		}
		
		/**
		 * Returns the Web-Address of the Address
		 * 
		 * @return	string	the Web-Address
		 * 
		 * @author	Oliver Lippert
		 */
		public function getWeb(){
			return $this->Web;
		}
		
		/**
		 * Defines the Web-Address of the Address
		 * 
		 * @param	string	the Web-Address
		 * 
		 * @author	Oliver Lippert
		 */
		public function setWeb($Web){
			if(filter_var($Web, FILTER_VALIDATE_URL)){
				$this->Web = $Web;
			}
		}

		/**
		 * Returns all the Address-Propertys in an simple String
		 *
		 * @return	string	all Address-Propertys
		 */
		public function toString(){
			return $this->getContact() ."<br />". $this->getStreet() ."<br />". $this->getZipcode() ." ". $this->getCity() ."<br />TEL ". $this->getPhone() ."<br />MOB ". $this->getMobile() ."<br />FAX ". $this->getFax() ."<br />WWW ". $this->getWeb() ."<br />MAIL ". $this->getMail();
		}
	}
?>