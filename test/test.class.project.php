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
		 * Runs all tests for the Project-Object
		 *
		 * @author	Oliver Lippert
		 */
		public function RunTests(){
			$this->TestID();
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