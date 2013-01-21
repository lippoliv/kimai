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
	
	include_once '../core/libraries/Kimai/Classes/class.address.php';
	
	/**
	 * Runs all Tests for the Address-Object
	 * 
	 * @author	Oliver Lippert
	 */
	class TestAddress{
		private $Messages = array();
		private $Address;
		
		public function __construct(){
			$this->Address = new Address();
		}
		
		/**
		 * Runs all negative-tests for the City-Property of the Address-Object
		 * 
		 * @author	Oliver Lippert
		 */
		private function TestCityNOK(){
			$this->Address->setCity("*");
			
			if($this->Address->getCity() == "*"){
				$this->AddMessageFailed("Address::City can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::City can't be set to just special characters");
			}
		}
		
		/**
		 * Runs all positive-tests for the City-Property of the Address-Object
		 * 
		 * @author	Oliver Lippert
		 */
		private function TestCityOK(){
			$this->Address->setCity("City");
			
			if($this->Address->getCity() == "City"){
				$this->AddMessageSuccess("Address::City can be set to 'City'");
			} else {
				$this->AddMessageFailed("Address::City can't be set to 'City'");
			}

			$this->Address->setCity("");
				
			if($this->Address->getCity() == ""){
				$this->AddMessageSuccess("Address::City can be set to ''");
			} else {
				$this->AddMessageFailed("Address::City can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the City-Property of the Address-Object
		 * 
		 * @author	Oliver Lippert
		 */
		private function TestCity(){
			$this->TestCityOK();
			$this->TestCityNOK();
		}
		
		/**
		 * Runs all negative-tests for the Contact-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestContactNOK(){
			$this->Address->setContact("*");
				
			if($this->Address->getContact() == "*"){
				$this->AddMessageFailed("Address::Contact can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Contact can't be set to just special characters");
			}
		}
		
		/**
		 * Runs all positive-tests for the Contact-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestContactOK(){
			$this->Address->setContact("Contact");
			
			if($this->Address->getContact() == "Contact"){
				$this->AddMessageSuccess("Address::Contact can be set to 'Contact'");
			} else {
				$this->AddMessageFailed("Address::Contact can't be set to 'Contact'");
			}
			
			$this->Address->setContact("Contact Contact");
			
			if($this->Address->getContact() == "Contact Contact"){
				$this->AddMessageSuccess("Address::Contact can be set to 'Contact Contact'");
			} else {
				$this->AddMessageFailed("Address::Contact can't be set to 'Contact Contact'");
			}

			$this->Address->setContact("");
				
			if($this->Address->getContact() == ""){
				$this->AddMessageSuccess("Address::Contact can be set to ''");
			} else {
				$this->AddMessageFailed("Address::Contact can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Contact-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestContact(){
			$this->TestContactOK();
			$this->TestContactNOK();
		}
		
		/**
		 * Runs all negative-tests for the Street-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestStreetNOK(){
			$this->Address->setStreet("*");
			
			if($this->Address->getStreet() == "*"){
				$this->AddMessageFailed("Address::Street can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Street can't be set to just special characters");
			}
		}
		
		/**
		 * Runs all positive-tests for the Street-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestStreetOK(){
			$this->Address->setStreet("Street");
			
			if($this->Address->getStreet() == "Street"){
				$this->AddMessageSuccess("Address::Street can be set to 'Contact'");
			} else {
				$this->AddMessageFailed("Address::Street can't be set to 'Contact'");
			}
			
			$this->Address->setStreet("Street Street");
			
			if($this->Address->getStreet() == "Street Street"){
				$this->AddMessageSuccess("Address::Street can be set to 'Street Street'");
			} else {
				$this->AddMessageFailed("Address::Street can't be set to 'Street Street'");
			}
			
			$this->Address->setStreet("Street Street 1");
			
			if($this->Address->getStreet() == "Street Street 1"){
				$this->AddMessageSuccess("Address::Street can be set to 'Street Street 1'");
			} else {
				$this->AddMessageFailed("Address::Street can't be set to 'Street Street 1'");
			}

			$this->Address->setStreet("");
				
			if($this->Address->getStreet() == ""){
				$this->AddMessageSuccess("Address::Street can be set to ''");
			} else {
				$this->AddMessageFailed("Address::Street can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Street-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestStreet(){
			$this->TestStreetOK();
			$this->TestStreetNOK();
		}
		
		/**
		 * Runs all negative-tests for the Zipcode-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestZipcodeNOK(){
			$this->Address->setZipcode("*");
			
			if($this->Address->getZipcode() == "*"){
				$this->AddMessageFailed("Address::Zipcode can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Zipcode can't be set to just special characters");
			}
			
			$this->Address->setZipcode("Zip");
			
			if($this->Address->getZipcode() == "Zip"){
				$this->AddMessageFailed("Address::Zipcode can be set to 'Zip'");
			} else {
				$this->AddMessageSuccess("Address::Zipcode can't be set to 'Zip'");
			}
			
			$this->Address->setZipcode("0001");
			
			if($this->Address->getZipcode() == "0001"){
				$this->AddMessageFailed("Address::Zipcode can be set to '0001'");
			} else {
				$this->AddMessageSuccess("Address::Zipcode can't be set to '0001'");
			}
		}
		
		/**
		 * Runs all positive-tests for the Zipcode-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestZipcodeOK(){
			$this->Address->setZipcode("00001");
			
			if($this->Address->getZipcode() == "00001"){
				$this->AddMessageSuccess("Address::Zipcode can be set to '00001'");
			} else {
				$this->AddMessageFailed("Address::Zipcode can't be set to '00001'");
			}
			
			$this->Address->setZipcode("");
			
			if($this->Address->getZipcode() == ""){
				$this->AddMessageSuccess("Address::Zipcode can be set to ''");
			} else {
				$this->AddMessageFailed("Address::Zipcode can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Zipcode-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestZipcode(){
			$this->TestZipcodeOK();
			$this->TestZipcodeNOK();
		}
		
		/**
		 * Runs all negative-tests for the Fax-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestFaxNOK(){
			$this->Address->setFax("*");
			
			if($this->Address->getFax() == "*"){
				$this->AddMessageFailed("Address::Fax can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Fax can't be set to just special characters");
			}
			
			$this->Address->setFax("Fax");
			
			if($this->Address->getFax() == "Fax"){
				$this->AddMessageFailed("Address::Fax can be set to 'Fax'");
			} else {
				$this->AddMessageSuccess("Address::Fax can't be set to 'Fax'");
			}
			
			$this->Address->setFax("+49 2345 Hallo");
			
			if($this->Address->getFax() == "+49 2345 Hallo"){
				$this->AddMessageFailed("Address::Fax can be set to '+49 2345 Hallo'");
			} else {
				$this->AddMessageSuccess("Address::Fax can't be set to '+49 2345 Hallo'");
			}
		}
		
		/**
		 * Runs all positive-tests for the Fax-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestFaxOK(){
			$this->Address->setFax("1234512345");
			
			if($this->Address->getFax() == "1234512345"){
				$this->AddMessageSuccess("Address::Fax can be set to '1234512345'");
			} else {
				$this->AddMessageFailed("Address::Fax can't be set to '1234512345'");
			}

			$this->Address->setFax("+49 2345 12345");
				
			if($this->Address->getFax() == "+49 2345 12345"){
				$this->AddMessageSuccess("Address::Fax can be set to '+49 2345 12345'");
			} else {
				$this->AddMessageFailed("Address::Fax can't be set to '+49 2345 12345'");
			}
			
			$this->Address->setFax("");
			
			if($this->Address->getFax() == ""){
				$this->AddMessageSuccess("Address::Fax can be set to ''");
			} else {
				$this->AddMessageFailed("Address::Fax can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Fax-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestFax(){
			$this->TestFaxOK();
			$this->TestFaxNOK();
		}
		
		/**
		 * Runs all negative-tests for the Phone-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestPhoneNOK(){
			$this->Address->setPhone("*");
				
			if($this->Address->getPhone() == "*"){
				$this->AddMessageFailed("Address::Phone can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Phone can't be set to just special characters");
			}
		}
		
		/**
		 * Runs all positive-tests for the Phone-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestPhoneOK(){
			$this->Address->setPhone("1234512345");
			
			if($this->Address->getPhone() == "1234512345"){
				$this->AddMessageSuccess("Address::Phone can be set to '1234512345'");
			} else {
				$this->AddMessageFailed("Address::Phone can't be set to '1234512345'");
			}

			$this->Address->setPhone("+49 2345 12345");
				
			if($this->Address->getPhone() == "+49 2345 12345"){
				$this->AddMessageSuccess("Address::Phone can be set to '+49 2345 12345'");
			} else {
				$this->AddMessageFailed("Address::Phone can't be set to '+49 2345 12345'");
			}
			
			$this->Address->setPhone("");
			
			if($this->Address->getPhone() == ""){
				$this->AddMessageSuccess("Address::Phone can be set to ''");
			} else {
				$this->AddMessageFailed("Address::Phone can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Phone-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestPhone(){
			$this->TestPhoneOK();
			$this->TestPhoneNOK();
		}
		
		/**
		 * Runs all negative-tests for the Mobile-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestMobileNOK(){
			$this->Address->setMobile("*");
				
			if($this->Address->getMobile() == "*"){
				$this->AddMessageFailed("Address::Mobile can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Mobile can't be set to just special characters");
			}
			
			$this->Address->setMobile("Mobile");
				
			if($this->Address->getMobile() == "Mobile"){
				$this->AddMessageFailed("Address::Mobile can be set to 'Mobile'");
			} else {
				$this->AddMessageSuccess("Address::Mobile can't be set to 'Mobile'");
			}
		}
		
		/**
		 * Runs all positive-tests for the Mobile-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestMobileOK(){
			$this->Address->setMobile("1234512345");
			
			if($this->Address->getMobile() == "1234512345"){
				$this->AddMessageSuccess("Address::Mobile can be set to '1234512345'");
			} else {
				$this->AddMessageFailed("Address::Mobile can't be set to '1234512345'");
			}

			$this->Address->setMobile("+49 2345 12345");
				
			if($this->Address->getMobile() == "+49 2345 12345"){
				$this->AddMessageSuccess("Address::Mobile can be set to '+49 2345 12345'");
			} else {
				$this->AddMessageFailed("Address::Mobile can't be set to '+49 2345 12345'");
			}
			
			$this->Address->setMobile("");
			
			if($this->Address->getMobile() == ""){
				$this->AddMessageSuccess("Address::Mobile can be set to ''");
			} else {
				$this->AddMessageFailed("Address::Mobile can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Mobile-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestMobile(){
			$this->TestMobileOK();
			$this->TestMobileNOK();
		}
		
		/**
		 * Runs all negative-tests for the Mail-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestMailNOK(){
			$this->Address->setMail("*");
			
			if($this->Address->getMail() == "*"){
				$this->AddMessageFailed("Address::Mail can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Mail can't be set to just special characters");
			}
			
			$this->Address->setMail("Mail");
			
			if($this->Address->getMail() == "Mail"){
				$this->AddMessageFailed("Address::Mail can be set to 'Mail'");
			} else {
				$this->AddMessageSuccess("Address::Mail can't be set to 'Mail'");
			}
			
			$this->Address->setMail("Mail@");
			
			if($this->Address->getMail() == "Mail@"){
				$this->AddMessageFailed("Address::Mail can be set to 'Mail@'");
			} else {
				$this->AddMessageSuccess("Address::Mail can't be set to 'Mail@'");
			}
			
			$this->Address->setMail("Mail@mail");
			
			if($this->Address->getMail() == "Mail@mail"){
				$this->AddMessageFailed("Address::Mail can be set to 'Mail@mail'");
			} else {
				$this->AddMessageSuccess("Address::Mail can't be set to 'Mail@mail'");
			}
		}
		
		/**
		 * Runs all positive-tests for the Mail-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestMailOK(){
			$this->Address->setMail("mail@mail.com");
			
			if($this->Address->getMail() == "mail@mail.com"){
				$this->AddMessageSuccess("Address::Mail can be set to 'mail@mail.com'");
			} else {
				$this->AddMessageFailed("Address::Mail can't be set to 'mail@mail.com'");
			}
			
			$this->Address->setMail("");
			
			if($this->Address->getMail() == ""){
				$this->AddMessageSuccess("Address::Mail can be set to ''");
			} else {
				$this->AddMessageFailed("Address::Mail can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Mail-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestMail(){
			$this->TestMailOK();
			$this->TestMailNOK();
		}
		
		/**
		 * Runs all negative-tests for the Web-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestWebNOK(){
			$this->Address->setWeb("*");
			
			if($this->Address->getWeb() == "*"){
				$this->AddMessageFailed("Address::Web can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Web can't be set to just special characters");
			}
			
			$this->Address->setWeb("Web");
			
			if($this->Address->getWeb() == "Web"){
				$this->AddMessageFailed("Address::Web can be set to 'Web'");
			} else {
				$this->AddMessageSuccess("Address::Web can't be set to 'Web'");
			}
			
			$this->Address->setWeb("http://");
			
			if($this->Address->getWeb() == "http://"){
				$this->AddMessageFailed("Address::Web can be set to 'http://'");
			} else {
				$this->AddMessageSuccess("Address::Web can't be set to 'http://'");
			}
		}
		
		/**
		 * Runs all positive-tests for the Web-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestWebOK(){
			$this->Address->setWeb("http://www.google.com");
			
			if($this->Address->getWeb() == "http://www.google.com"){
				$this->AddMessageSuccess("Address::Web can be set to 'http://www.google.com'");
			} else {
				$this->AddMessageFailed("Address::Web can't be set to 'http://www.google.com'");
			}
			
			$this->Address->setWeb("www.google.com");
			
			if($this->Address->getWeb() == "http://www.google.com"){
				$this->AddMessageSuccess("Address::Web can be set to 'www.google.com'");
			} else {
				$this->AddMessageFailed("Address::Web can't be set to 'www.google.com'");
			}
			
			$this->Address->setWeb("google.com");
			
			if($this->Address->getWeb() == "http://google.com"){
				$this->AddMessageSuccess("Address::Web can be set to 'google.com'");
			} else {
				$this->AddMessageFailed("Address::Web can't be set to 'google.com'");
			}
			
			
			$this->Address->setWeb("http://www");
			
			if($this->Address->getWeb() == "http://www"){
				$this->AddMessageSuccess("Address::Web can be set to 'http://www'");
			} else {
				$this->AddMessageFailed("Address::Web can't be set to 'http://www'");
			}
			
			//For Network-Wide Servers is now TLD (.de, .com, ...) needed
			$this->Address->setWeb("http://www.google");
			
			if($this->Address->getWeb() == "http://www.google"){
				$this->AddMessageSuccess("Address::Web can be set to 'http://www.google'");
			} else {
				$this->AddMessageFailed("Address::Web can't be set to 'http://www.google'");
			}
			
			$this->Address->setWeb("");
			
			if($this->Address->getWeb() == ""){
				$this->AddMessageSuccess("Address::Web can be set to ''");
			} else {
				$this->AddMessageFailed("Address::Web can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Web-Property of the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestWeb(){
			$this->TestWebOK();
			$this->TestWebNOK();
		}
		
		/**
		 * Runs all tests for the Address-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function RunTests(){
			$this->TestContact();
			$this->TestStreet();
			$this->TestZipcode();
			$this->TestCity();
			$this->TestFax();
			$this->TestPhone();
			$this->TestMobile();
			$this->TestMail();
			$this->TestWeb();
		}
		
		/**
		 * Adds an Success-Message to the output
		 * 
		 * @param	String	the Success-Message
		 * 
		 * @author	Oliver Lippert
		 */
		private function AddMessageSuccess($Msg){
			$this->Messages[] = array($Msg, "green");
		}
		
		/**
		 * Adds an Fail-Message to the output
		 *
		 * @param	String	the Fail-Message
		 *
		 * @author	Oliver Lippert
		 */
		private function AddMessageFailed($Msg){
			$this->Messages[] = array($Msg, "red");
		}
		
		/**
		 * Print's out all the Messages, which where added through the Tests
		 * 
		 * @author	Oliver Lippert
		 */
		public function ShowResults(){
			foreach($this->Messages as $Message){
				echo "<p style='color:". $Message[1] ."'>";
					echo $Message[0];
				echo "</p>";
			}
		}
	}
	
	$AddressTest = new TestAddress();
	$AddressTest->RunTests();
?>

<h2>Checking Address-Object</h2>
<?php $AddressTest->ShowResults(); ?>