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
	
	class TestCustomer{
		private $Messages = array();
		private $Customer;
		
		public function __construct(){
			$this->Customer = new Customer(false);
		}
		
		/**
		 * Runs all negative-tests for the ID-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestIDNOK(){
			$this->Customer->setID("*?");
			if($this->Customer->getID() == "*?"){
				$this->AddMessageFailed("Customer::ID can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Customer::ID can't be set to just special characters");
			}
			
			$this->Customer->setID("hannes");
			if($this->Customer->getID() == "hannes"){
				$this->AddMessageFailed("Customer::ID can be set to 'hannes'");
			} else {
				$this->AddMessageSuccess("Customer::ID can't be set to 'hannes'");
			}
		}
		
		/**
		 * Runs all positive-tests for the ID-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestIDOK(){
			$this->Customer->setID("1");
			if($this->Customer->getID() == "1"){
				$this->AddMessageSuccess("Customer::ID can be set to '1'");
			} else {
				$this->AddMessageFailed("Customer::ID can't be set to '1'");
			}

			$this->Customer->setID("");
			if($this->Customer->getID() == ""){
				$this->AddMessageSuccess("Customer::ID can be set to ''");
			} else {
				$this->AddMessageFailed("Customer::ID can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the ID-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestID(){
			$this->TestIDOK();
			$this->TestIDNOK();
		}
		
		/**
		 * Runs all negative-tests for the Name-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestNameNOK(){
			$this->Customer->setName("*?");
			if($this->Customer->getName() == "*?"){
				$this->AddMessageFailed("Customer::Name can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Customer::Name can't be set to just special characters");
			}
		}
		
		/**
		 * Runs all positive-tests for the Name-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestNameOK(){
			$this->Customer->setName("Name");
			if($this->Customer->getName() == "Name"){
				$this->AddMessageSuccess("Customer::Name can be set to 'Name'");
			} else {
				$this->AddMessageFailed("Customer::Name can't be set to 'Name'");
			}

			$this->Customer->setName("Name Name");
			if($this->Customer->getName() == "Name Name"){
				$this->AddMessageSuccess("Customer::Name can be set to 'Name Name'");
			} else {
				$this->AddMessageFailed("Customer::Name can't be set to 'Name Name'");
			}

			$this->Customer->setName("");
			if($this->Customer->getName() == ""){
				$this->AddMessageSuccess("Customer::Name can be set to ''");
			} else {
				$this->AddMessageFailed("Customer::Name can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Name-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestName(){
			$this->TestNameOK();
			$this->TestNameNOK();
		}
		
		/**
		 * Runs all tests for the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function RunTests(){
			$this->TestID();
			$this->TestName();
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
	
	$CustomerTest = new TestCustomer();
	$CustomerTest->RunTests();
?>

<h2>Checking Customer-Object</h2>
<?php $CustomerTest->ShowResults(); ?>