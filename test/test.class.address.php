<?php
	include_once '../core/libraries/Kimai/Classes/class.address.php';
	
	$errs = array();
	$Adress = new Address();
	
	$Adress->setCity("City");
	$Adress->setContact("Contact");
	$Adress->setFax("Fax");
	$Adress->setMail("Mail");
	$Adress->setPhone("Phone");
	$Adress->setStreet("Street");
	$Adress->setWeb("Web");
	$Adress->setZipcode("Zip");
	
	if($Adress->getCity() != "City"){
		$errs[] = "getCity doesn't return expected Value ('City' vs. '". $Adress->getCity() ."')";
	}
	
	if($Adress->getContact() != "Contact"){
		$errs[] = "getContact doesn't return expected Value ('Contact' vs. '". $Adress->getContact() ."')";
	}
	
	if($Adress->getStreet() != "Street"){
		$errs[] = "getStreet doesn't return expected Value ('Street' vs. '". $Adress->getStreet() ."')";
	}
	
	if($Adress->getZipcode() != ""){
		$errs[] = "getZipcode doesn't return expected Value ('' vs. '". $Adress->getZipcode() ."')";
	} else {
		$Adress->setZipcode("00001");

		if($Adress->getZipcode() != "00001"){
			$errs[] = "getZipcode doesn't return expected Value ('00001' vs. '". $Adress->getZipcode() ."')";
		}
	}
	
	if($Adress->getFax() != ""){
		$errs[] = "getFax doesn't return expected Value ('' vs. '". $Adress->getFax() ."')";
	} else {
		$Adress->setFax("1234512345");
		
		if($Adress->getFax() != "1234512345"){
			$errs[] = "getFax doesn't return expected Value ('1234512345' vs. '". $Adress->getFax() ."')";
		} else {
			$Adress->setFax("+49 2345 12345");
			
			if($Adress->getFax() != "+49 2345 12345"){
				$errs[] = "getFax doesn't return expected Value ('+49 2345 12345' vs. '". $Adress->getFax() ."')";
			}
		}
	}
	
	if($Adress->getPhone() != ""){
		$errs[] = "getPhone doesn't return expected Value ('' vs. '". $Adress->getPhone() ."')";
	} else {
		$Adress->setPhone("1234512345");
		
		if($Adress->getPhone() != "1234512345"){
			$errs[] = "getPhone doesn't return expected Value ('1234512345' vs. '". $Adress->getPhone() ."')";
		} else {
			$Adress->setPhone("+49 2345 12345");
			
			if($Adress->getPhone() != "+49 2345 12345"){
				$errs[] = "getPhone doesn't return expected Value ('+49 2345 12345' vs. '". $Adress->getPhone() ."')";
			}
		}
	}
	
	if($Adress->getMail() != ""){
		$errs[] = "getMail doesn't return expected Value ('' vs. '". $Adress->getMail() ."')";
	} else {
		$Adress->setMail("mail@mail.com");
		
		if($Adress->getMail() != "mail@mail.com"){
			$errs[] = "getMail doesn't return expected Value ('mail@mail.com' vs. '". $Adress->getMail() ."')";
		}
	}
	
	if($Adress->getWeb() != ""){
		$errs[] = "getWeb doesn't return expected Value ('' vs. '". $Adress->getWeb() ."')";
	} else {
		$Adress->setWeb("http://www.google.com");
		
		if($Adress->getWeb() != "http://www.google.com"){
			$errs[] = "getWeb doesn't return expected Value ('http://www.google.com' vs. '". $Adress->getWeb() ."')";
		} else {
			$Adress->setWeb("");
			$Adress->setWeb("www.google.com");
			
			if($Adress->getWeb() != "http://www.google.com"){
				$errs[] = "getWeb doesn't return expected Value ('http://www.google.com' vs. '". $Adress->getWeb() ."')";
			} else {
				$Adress->setWeb("");
				$Adress->setWeb("google.com");
				
				if($Adress->getWeb() != "http://www.google.com"){
					$errs[] = "getWeb doesn't return expected Value ('http://www.google.com' vs. '". $Adress->getWeb() ."')";
				}
			}
		}
	}
?>

<h2>Testresult for class.address.php</h2>
<?php if(count($errs) > 0): ?>
	<?php foreach($errs as $err): ?>
		<p>
			<?php echo $err; ?>
		</p>
	<?php endforeach; ?>
<?php else: ?>
	<p>No errors found</p>
<?php endif; ?>