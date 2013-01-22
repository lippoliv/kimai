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
	
	include_once 'Kimai/Classes/class.address.php';
	
	/**
	 * Does all Tests for the Customer-Object
	 * 
	 * @author	Oliver Lippert
	 */
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
		private function TestIDNOK(){
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
		private function TestIDOK(){
			$this->Customer->setID(1);
			if($this->Customer->getID() == 1){
				$this->AddMessageSuccess("Customer::ID can be set to 1");
			} else {
				$this->AddMessageFailed("Customer::ID can't be set to 1");
			}

			$this->Customer->setID(-1);
			if($this->Customer->getID() == -1){
				$this->AddMessageSuccess("Customer::ID can be set to -1");
			} else {
				$this->AddMessageFailed("Customer::ID can't be set to -1");
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
		private function TestNameNOK(){
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
		private function TestNameOK(){
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
		 * Runs all negative-tests for the Comment-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestCommentNOK(){
		}
		
		/**
		 * Runs all positive-tests for the Comment-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestCommentOK(){
			$this->Customer->setComment("Comment");
			if($this->Customer->getComment() == "Comment"){
				$this->AddMessageSuccess("Customer::Comment can be set to 'Comment'");
			} else {
				$this->AddMessageFailed("Customer::Comment can't be set to 'Comment'");
			}
			
			$this->Customer->setComment("Comment Comment");
			if($this->Customer->getComment() == "Comment Comment"){
				$this->AddMessageSuccess("Customer::Comment can be set to 'Comment Comment'");
			} else {
				$this->AddMessageFailed("Customer::Comment can't be set to 'Comment Comment'");
			}
			
			$this->Customer->setComment("123456789");
			if($this->Customer->getComment() == "123456789"){
				$this->AddMessageSuccess("Customer::Comment can be set to '123456789'");
			} else {
				$this->AddMessageFailed("Customer::Comment can't be set to '123456789'");
			}
			
			$this->Customer->setComment("");
			if($this->Customer->getComment() == ""){
				$this->AddMessageSuccess("Customer::Comment can be set to ''");
			} else {
				$this->AddMessageFailed("Customer::Comment can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Comment-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestComment(){
			$this->TestCommentOK();
			$this->TestCommentNOK();
		}
		
		/**
		 * Runs all negative-tests for the Visible-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestVisibleNOK(){
			$this->Customer->setVisible("test");
			if($this->Customer->isVisible() == "test"){
				$this->AddMessageFailed("Customer::Visible can be set to 'test'");
			} else {
				$this->AddMessageSuccess("Customer::Visible can't be set to 'test'");
			}
		}

		/**
		 * Runs all positive-tests for the Visible-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestVisibleOK(){
			$this->Customer->setVisible(true);
			if($this->Customer->isVisible()){
				$this->AddMessageSuccess("Customer::Visible can be set to 'true'");
			} else {
				$this->AddMessageFailed("Customer::Visible can't be set to 'true'");
			}
			
			$this->Customer->setVisible(false);
			if(!$this->Customer->isVisible()){
				$this->AddMessageSuccess("Customer::Visible can be set to 'false'");
			} else {
				$this->AddMessageFailed("Customer::Visible can't be set to 'false'");
			}
		}

		/**
		 * Runs all tests for the Visible-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestVisible(){
			$this->TestVisibleOK();
			$this->TestVisibleNOK();
		}
		
		/**
		 * Runs all negative-tests for the Company-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestCompanyNOK(){
		}
		
		/**
		 * Runs all positive-tests for the Company-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestCompanyOK(){
			$this->Customer->setCompany("Company");
			if($this->Customer->getCompany() == "Company"){
				$this->AddMessageSuccess("Customer::Company can be set to 'Company'");
			} else {
				$this->AddMessageFailed("Customer::Company can't be set to 'Company'");
			}
			
			$this->Customer->setCompany("123");
			if($this->Customer->getCompany() == "123"){
				$this->AddMessageSuccess("Customer::Company can be set to '123'");
			} else {
				$this->AddMessageFailed("Customer::Company can't be set to '123'");
			}
			
			$this->Customer->setCompany("");
			if($this->Customer->getCompany() == ""){
				$this->AddMessageSuccess("Customer::Company can be set to ''");
			} else {
				$this->AddMessageFailed("Customer::Company can't be set to ''");
			}
		}
		
		/**
		 * Runs all tests for the Company-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestCompany(){
			$this->TestCompanyOK();
			$this->TestCompanyNOK();
		}

		/**
		 * Runs all negative-tests for the Address-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestAddressNOK(){
			$this->Customer->setAddress("Address");
			if($this->Customer->getAddress() == "Address"){
				$this->AddMessageFailed("Customer::Address can be set to 'Address'");
			} else {
				$this->AddMessageSuccess("Customer::Address can't be set to 'Address'");
			}
		}

		/**
		 * Runs all positive-tests for the Address-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestAddressOK(){
			$this->Customer->setAddress(new Address());
			if($this->Customer->getAddress() instanceof Address){
				$this->AddMessageSuccess("Customer::Address can be set to Address-Object");
			} else {
				$this->AddMessageFailed("Customer::Address can't be set to Address-Object");
			}
			
			$this->Customer->setAddress(null);
			if($this->Customer->getAddress() == null){
				$this->AddMessageSuccess("Customer::Address can be set to null");
			} else {
				$this->AddMessageFailed("Customer::Address can't be set to null");
			}
		}
		
		/**
		 * Runs all tests for the Address-Property of the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestAddress(){
			$this->TestAddressOK();
			$this->TestAddressNOK();
		}
		
		/**
		 * Runs all tests for the Customer-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function RunTests(){
			$this->TestID();
			$this->TestName();
			$this->TestComment();
			$this->TestVisible();
			$this->TestCompany();
			$this->TestAddress();
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