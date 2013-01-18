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
		
		public function RunTests(){
			$this->TestContact();
			$this->TestStreet();
			$this->TestCity();
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
	
	$errs = array();
	$Address = new Address();
	
	$Address->setCity("City");
	$Address->setContact("Contact");
	$Address->setFax("Fax");
	$Address->setMail("Mail");
	$Address->setPhone("Phone");
	$Address->setStreet("Street");
	$Address->setWeb("Web");
	$Address->setZipcode("Zip");
	
	if($Address->getZipcode() != ""){
		$errs[] = "getZipcode doesn't return expected Value ('' vs. '". $Address->getZipcode() ."')";
	} else {
		$Address->setZipcode("00001");

		if($Address->getZipcode() != "00001"){
			$errs[] = "getZipcode doesn't return expected Value ('00001' vs. '". $Address->getZipcode() ."')";
		}
	}
	
	if($Address->getFax() != ""){
		$errs[] = "getFax doesn't return expected Value ('' vs. '". $Address->getFax() ."')";
	} else {
		$Address->setFax("1234512345");
		
		if($Address->getFax() != "1234512345"){
			$errs[] = "getFax doesn't return expected Value ('1234512345' vs. '". $Address->getFax() ."')";
		} else {
			$Address->setFax("+49 2345 12345");
			
			if($Address->getFax() != "+49 2345 12345"){
				$errs[] = "getFax doesn't return expected Value ('+49 2345 12345' vs. '". $Address->getFax() ."')";
			}
		}
	}
	
	if($Address->getPhone() != ""){
		$errs[] = "getPhone doesn't return expected Value ('' vs. '". $Address->getPhone() ."')";
	} else {
		$Address->setPhone("1234512345");
		
		if($Address->getPhone() != "1234512345"){
			$errs[] = "getPhone doesn't return expected Value ('1234512345' vs. '". $Address->getPhone() ."')";
		} else {
			$Address->setPhone("+49 2345 12345");
			
			if($Address->getPhone() != "+49 2345 12345"){
				$errs[] = "getPhone doesn't return expected Value ('+49 2345 12345' vs. '". $Address->getPhone() ."')";
			}
		}
	}
	
	if($Address->getMail() != ""){
		$errs[] = "getMail doesn't return expected Value ('' vs. '". $Address->getMail() ."')";
	} else {
		$Address->setMail("mail@mail.com");
		
		if($Address->getMail() != "mail@mail.com"){
			$errs[] = "getMail doesn't return expected Value ('mail@mail.com' vs. '". $Address->getMail() ."')";
		}
	}
	
	if($Address->getWeb() != ""){
		$errs[] = "getWeb doesn't return expected Value ('' vs. '". $Address->getWeb() ."')";
	} else {
		$Address->setWeb("http://www.google.com");
		
		if($Address->getWeb() != "http://www.google.com"){
			$errs[] = "getWeb doesn't return expected Value ('http://www.google.com' vs. '". $Address->getWeb() ."')";
		} else {
			$Address->setWeb("");
			$Address->setWeb("www.google.com");
			
			if($Address->getWeb() != "http://www.google.com"){
				$errs[] = "getWeb doesn't return expected Value ('http://www.google.com' vs. '". $Address->getWeb() ."')";
			} else {
				$Address->setWeb("");
				$Address->setWeb("google.com");
				
				if($Address->getWeb() != "http://www.google.com"){
					$errs[] = "getWeb doesn't return expected Value ('http://www.google.com' vs. '". $Address->getWeb() ."')";
				}
			}
		}
	}
?>

<h2>Checking Address-Object</h2>
<?php $AddressTest->ShowResults(); ?>
<?php if(count($errs) > 0): ?>
	<?php foreach($errs as $err): ?>
		<p>
			<?php echo $err; ?>
		</p>
	<?php endforeach; ?>
<?php else: ?>
	<p>No errors found</p>
<?php endif; ?>