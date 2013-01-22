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
	
	include_once 'Kimai/Classes/class.project.php';

	/**
	 * Does all Tests for the Project-Object
	 *
	 * @author	Oliver Lippert
	 */
	class TestProject{
		private $Messages = array();
		private $Project;
		
		public function __construct(){
			$this->Project = new Project();
		}
		
		/**
		 * Runs all negative-tests for the ID-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestIDNOK(){
			$this->Project->setID("*?");
			if($this->Project->getID() == "*?"){
				$this->AddMessageFailed("Project::ID can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Project::ID can't be set to just special characters");
			}
			
			$this->Project->setID("hannes");
			if($this->Project->getID() == "hannes"){
				$this->AddMessageFailed("Project::ID can be set to 'hannes'");
			} else {
				$this->AddMessageSuccess("Project::ID can't be set to 'hannes'");
			}
		}

		/**
		 * Runs all positive-tests for the ID-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestIDOK(){
			$this->Project->setID(1);
			if($this->Project->getID() == 1){
				$this->AddMessageSuccess("Project::ID can be set to 1");
			} else {
				$this->AddMessageFailed("Project::ID can't be set to 1");
			}

			$this->Project->setID(-1);
			if($this->Project->getID() == -1){
				$this->AddMessageSuccess("Project::ID can be set to -1");
			} else {
				$this->AddMessageFailed("Project::ID can't be set to -1");
			}
		}
		
		/**
		 * Runs all tests for the ID-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestID(){
			$this->TestIDOK();
			$this->TestIDNOK();
		}

		/**
		 * Runs all negative-tests for the Name-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestNameNOK(){
			$this->Project->setName("*?");
			if($this->Project->getName() == "*?"){
				$this->AddMessageFailed("Project::Name can be set to just special characters");
			} else {
				$this->AddMessageSuccess("Project::Name can't be set to just special characters");
			}
		}

		/**
		 * Runs all positive-tests for the Name-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestNameOK(){
			$this->Project->setName("Name");
			if($this->Project->getName() == "Name"){
				$this->AddMessageSuccess("Project::Name can be set to 'Name'");
			} else {
				$this->AddMessageFailed("Project::Name can't be set to 'Name'");
			}

			$this->Project->setName("Name Name");
			if($this->Project->getName() == "Name Name"){
				$this->AddMessageSuccess("Project::Name can be set to 'Name Name'");
			} else {
				$this->AddMessageFailed("Project::Name can't be set to 'Name Name'");
			}

			$this->Project->setName("");
			if($this->Project->getName() == ""){
				$this->AddMessageSuccess("Project::Name can be set to ''");
			} else {
				$this->AddMessageFailed("Project::Name can't be set to ''");
			}
		}

		/**
		 * Runs all tests for the Name-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestName(){
			$this->TestNameOK();
			$this->TestNameNOK();
		}
		
		/**
		 * Runs all negative-tests for the Visible-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestVisibleNOK(){
			$this->Project->setVisible("test");
			if($this->Project->isVisible() == "test"){
				$this->AddMessageFailed("Project::Visible can be set to 'test'");
			} else {
				$this->AddMessageSuccess("Project::Visible can't be set to 'test'");
			}
		}

		/**
		 * Runs all positive-tests for the Visible-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestVisibleOK(){
			$this->Project->setVisible(true);
			if($this->Project->isVisible()){
				$this->AddMessageSuccess("Project::Visible can be set to 'true'");
			} else {
				$this->AddMessageFailed("Project::Visible can't be set to 'true'");
			}
			
			$this->Project->setVisible(false);
			if(!$this->Project->isVisible()){
				$this->AddMessageSuccess("Project::Visible can be set to 'false'");
			} else {
				$this->AddMessageFailed("Project::Visible can't be set to 'false'");
			}
		}

		/**
		 * Runs all tests for the Visible-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestVisible(){
			$this->TestVisibleOK();
			$this->TestVisibleNOK();
		}

		/**
		 * Runs all negative-tests for the Budget-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestBudgetNOK(){
			$this->Project->setBudget("test");
			
			if(((string) $this->Project->getBudget()) == "test"){
				$this->AddMessageFailed("Project::Budget can be set to 'test'");
			} else {
				$this->AddMessageSuccess("Project::Budget can't be set to 'test'");
			}

			$this->Project->setBudget("");
			if(((string)$this->Project->getBudget()) == ""){
				$this->AddMessageFailed("Project::Budget can be set to ''");
			} else {
				$this->AddMessageSuccess("Project::Budget can't be set to ''");
			}
		}

		/**
		 * Runs all positive-tests for the Budget-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestBudgetOK(){
			$this->Project->setBudget(1);
			if($this->Project->getBudget() == 1){
				$this->AddMessageSuccess("Project::Budget can be set to 1");
			} else {
				$this->AddMessageFailed("Project::Budget can't be set to 1");
			}
			
			$this->Project->setBudget(-1);
			if($this->Project->getBudget() == -1){
				$this->AddMessageSuccess("Project::Budget can be set to -1");
			} else {
				$this->AddMessageFailed("Project::Budget can't be set to -1");
			}
			
			$this->Project->setBudget(1.25);
			if($this->Project->getBudget() == 1.25){
				$this->AddMessageSuccess("Project::Budget can be set to 1.25");
			} else {
				$this->AddMessageFailed("Project::Budget can't be set to 1.25");
			}
			
			$this->Project->setBudget(-1.25);
			if($this->Project->getBudget() == -1.25){
				$this->AddMessageSuccess("Project::Budget can be set to -1.25");
			} else {
				$this->AddMessageFailed("Project::Budget can't be set to -1.25");
			}
			
			$this->Project->setBudget(0);
			if($this->Project->getBudget() == 0){
				$this->AddMessageSuccess("Project::Budget can be set to 0");
			} else {
				$this->AddMessageFailed("Project::Budget can't be set to 0");
			}
		}

		/**
		 * Runs all tests for the Budget-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestBudget(){
			$this->TestBudgetOK();
			$this->TestBudgetNOK();
		}

		/**
		 * Runs all negative-tests for the Effort-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestEffortNOK(){
			$this->Project->setEffort("test");
			if($this->Project->getEffort() == "test"){
				$this->AddMessageFailed("Project::Effort can be set to 'test'");
			} else {
				$this->AddMessageSuccess("Project::Effort can't be set to 'test'");
			}

			$this->Project->setEffort("");
			if($this->Project->getEffort() == ""){
				$this->AddMessageFailed("Project::Effort can be set to ''");
			} else {
				$this->AddMessageSuccess("Project::Effort can't be set to ''");
			}
		}

		/**
		 * Runs all positive-tests for the Effort-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestEffortOK(){
			$this->Project->setEffort(1);
			if($this->Project->getEffort() == 1){
				$this->AddMessageSuccess("Project::Effort can be set to 1");
			} else {
				$this->AddMessageFailed("Project::Effort can't be set to 1");
			}
			
			$this->Project->setEffort(-1);
			if($this->Project->getEffort() == -1){
				$this->AddMessageSuccess("Project::Effort can be set to -1");
			} else {
				$this->AddMessageFailed("Project::Effort can't be set to -1");
			}
			
			$this->Project->setEffort(1.25);
			if($this->Project->getEffort() == 1.25){
				$this->AddMessageSuccess("Project::Effort can be set to 1.25");
			} else {
				$this->AddMessageFailed("Project::Effort can't be set to 1.25");
			}
			
			$this->Project->setEffort(-1.25);
			if($this->Project->getEffort() == -1.25){
				$this->AddMessageSuccess("Project::Effort can be set to -1.25");
			} else {
				$this->AddMessageFailed("Project::Effort can't be set to -1.25");
			}
			
			$this->Project->setEffort(0);
			if($this->Project->getEffort() == 0){
				$this->AddMessageSuccess("Project::Effort can be set to 0");
			} else {
				$this->AddMessageFailed("Project::Effort can't be set to 0");
			}
		}

		/**
		 * Runs all tests for the Effort-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestEffort(){
			$this->TestEffortOK();
			$this->TestEffortNOK();
		}

		/**
		 * Runs all negative-tests for the Approved-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestApprovedNOK(){
			$this->Project->setApproved("test");
			if($this->Project->getApproved() == "test"){
				$this->AddMessageFailed("Project::Approved can be set to 'test'");
			} else {
				$this->AddMessageSuccess("Project::Approved can't be set to 'test'");
			}

			$this->Project->setApproved("");
			if($this->Project->getApproved() == ""){
				$this->AddMessageFailed("Project::Approved can be set to ''");
			} else {
				$this->AddMessageSuccess("Project::Approved can't be set to ''");
			}
		}

		/**
		 * Runs all positive-tests for the Approved-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestApprovedOK(){
			$this->Project->setApproved(1);
			if($this->Project->getApproved() == 1){
				$this->AddMessageSuccess("Project::Approved can be set to 1");
			} else {
				$this->AddMessageFailed("Project::Approved can't be set to 1");
			}
			
			$this->Project->setApproved(-1);
			if($this->Project->getApproved() == -1){
				$this->AddMessageSuccess("Project::Approved can be set to -1");
			} else {
				$this->AddMessageFailed("Project::Approved can't be set to -1");
			}
			
			$this->Project->setApproved(1.25);
			if($this->Project->getApproved() == 1.25){
				$this->AddMessageSuccess("Project::Approved can be set to 1.25");
			} else {
				$this->AddMessageFailed("Project::Approved can't be set to 1.25");
			}
			
			$this->Project->setApproved(-1.25);
			if($this->Project->getApproved() == -1.25){
				$this->AddMessageSuccess("Project::Approved can be set to -1.25");
			} else {
				$this->AddMessageFailed("Project::Approved can't be set to -1.25");
			}
			
			$this->Project->setApproved(0);
			if($this->Project->getApproved() == 0){
				$this->AddMessageSuccess("Project::Approved can be set to 0");
			} else {
				$this->AddMessageFailed("Project::Approved can't be set to 0");
			}
		}

		/**
		 * Runs all tests for the Approved-Property of the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestApproved(){
			$this->TestApprovedOK();
			$this->TestApprovedNOK();
		}

		/**
		 * Runs all negative-tests for the Owner-Property of the Porject-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestOwnerNOK(){
			$this->Project->setOwner("Owner");
			if($this->Project->getOwner() == "Owner"){
				$this->AddMessageFailed("Customer::Owner can be set to 'Owner'");
			} else {
				$this->AddMessageSuccess("Customer::Owner can't be set to 'Owner'");
			}
		}

		/**
		 * Runs all positive-tests for the Owner-Property of the Porject-Object
		 *
		 * @author	Oliver Lippert
		 */
		private function TestOwnerOK(){
			$this->Project->setOwner(new Customer(false));
			if($this->Project->getOwner() instanceof Customer){
				$this->AddMessageSuccess("Customer::Owner can be set to Customer-Object");
			} else {
				$this->AddMessageFailed("Customer::Owner can't be set to Customer-Object");
			}
			
			$this->Project->setOwner(null);
			if($this->Project->getOwner() == null){
				$this->AddMessageSuccess("Customer::Owner can be set to null");
			} else {
				$this->AddMessageFailed("Customer::Owner can't be set to null");
			}
		}
		
		/**
		 * Runs all tests for the Owner-Property of the Porject-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function TestOwner(){
			$this->TestOwnerOK();
			$this->TestOwnerNOK();
		}
		
		/**
		 * Runs all tests for the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function RunTests(){
			$this->TestID();
			$this->TestName();
			$this->TestVisible();
			$this->TestBudget();
			$this->TestEffort();
			$this->TestApproved();
			$this->TestOwner();
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
	
	$ProjectTest = new TestProject();
	$ProjectTest->RunTests();
?>

<h2>Checking Project-Object</h2>
<?php $ProjectTest->ShowResults(); ?>