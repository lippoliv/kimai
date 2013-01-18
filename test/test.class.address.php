<?php
	include_once '../core/libraries/Kimai/Classes/class.address.php';
	
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
	
	if($Address->getCity() != "City"){
		$errs[] = "getCity doesn't return expected Value ('City' vs. '". $Address->getCity() ."')";
	}
	
	if($Address->getContact() != "Contact"){
		$errs[] = "getContact doesn't return expected Value ('Contact' vs. '". $Address->getContact() ."')";
	}
	
	if($Address->getStreet() != "Street"){
		$errs[] = "getStreet doesn't return expected Value ('Street' vs. '". $Address->getStreet() ."')";
	}
	
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