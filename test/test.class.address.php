<?php
	include_once '../core/libraries/Kimai/Classes/class.address.php';
	
	class TestAddress{
		private $Messages = array();
		private $Address;
		
		public function __construct(){
			$this->Address = new Address();
		}
		
		private function TestCityNOK(){
			$this->Address->setCity("*");
			
			if($this->Address->getCity() == "*"){
				$this->AddMessageFailed("Address::City can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::City can't be set to just special characters");
			}
		}
		
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
		
		private function TestCity(){
			$this->TestCityOK();
			$this->TestCityNOK();
		}
		
		private function TestContactNOK(){
			$this->Address->setContact("*");
				
			if($this->Address->getContact() == "*"){
				$this->AddMessageFailed("Address::Contact can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Contact can't be set to just special characters");
			}
		}
		
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
		
		private function TestContact(){
			$this->TestContactOK();
			$this->TestContactNOK();
		}
		
		private function TestStreetNOK(){
			$this->Address->setStreet("*");
			
			if($this->Address->getStreet() == "*"){
				$this->AddMessageFailed("Address::Street can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Street can't be set to just special characters");
			}
		}
		
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
		
		private function TestStreet(){
			$this->TestStreetOK();
			$this->TestStreetNOK();
		}
		
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
		
		private function TestZipcode(){
			$this->TestZipcodeOK();
			$this->TestZipcodeNOK();
		}
		
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
		
		private function TestFax(){
			$this->TestFaxOK();
			$this->TestFaxNOK();
		}
		
		private function TestPhoneNOK(){
			$this->Address->setPhone("*");
				
			if($this->Address->getPhone() == "*"){
				$this->AddMessageFailed("Address::Phone can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Address::Phone can't be set to just special characters");
			}
		}
		
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
		
		private function TestPhone(){
			$this->TestPhoneOK();
			$this->TestPhoneNOK();
		}
		
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
		
		private function TestMobile(){
			$this->TestMobileOK();
			$this->TestMobileNOK();
		}
		
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
		
		private function TestMail(){
			$this->TestMailOK();
			$this->TestMailNOK();
		}
		
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
			
			$this->Address->setWeb("http://www");
			
			if($this->Address->getWeb() == "http://www"){
				$this->AddMessageFailed("Address::Web can be set to 'http://www'");
			} else {
				$this->AddMessageSuccess("Address::Web can't be set to 'http://www'");
			}
			
			$this->Address->setWeb("http://www.google");
			
			if($this->Address->getWeb() == "http://www.google"){
				$this->AddMessageFailed("Address::Web can be set to 'http://www.google'");
			} else {
				$this->AddMessageSuccess("Address::Web can't be set to 'http://www.google'");
			}
		}
		
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
			
			$this->Address->setWeb("");
			
			if($this->Address->getWeb() == ""){
				$this->AddMessageSuccess("Address::Web can be set to ''");
			} else {
				$this->AddMessageFailed("Address::Web can't be set to ''");
			}
		}
		
		private function TestWeb(){
			$this->TestWebOK();
			$this->TestWebNOK();
		}
		
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
		
		private function AddMessageSuccess($Msg){
			$this->Messages[] = array($Msg, "green");
		}
		
		private function AddMessageFailed($Msg){
			$this->Messages[] = array($Msg, "red");
		}
		
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