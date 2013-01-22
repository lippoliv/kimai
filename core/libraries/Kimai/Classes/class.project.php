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
	
	include_once 'class.customer.php';
	
	/**
	 * Represents information about an Project
	 * 
	 * @author	Oliver Lippert
	 */
	class Project{
		private $ID;
		private $Name;
		private $Visible;
		private $Budget;
		private $Effort;
		private $Approved;
		private $Owner;
		
		/**
		 * Returns the ID of the Project
		 *
		 * @return	double	the Project-ID
		 *
		 * @author	Oliver Lippert
		 */
		public function getID(){
			return $this->ID;
		}
		
		/**
		 * Defines the ID of the Project
		 *
		 * @param	double $ID	the Project-ID
		 *
		 * @author	Oliver Lippert
		 */
		public function setID($ID){
			if(is_double($ID) || is_int($ID)){
				$this->ID = $ID;
			}
		}
		
		/**
		 * Returns the Name of the Project
		 *
		 * @return	string	the Project-Name
		 *
		 * @author	Oliver Lippert
		 */
		public function getName(){
			return $this->Name;
		}
		
		/**
		 * Defines the Name of the Project
		 *
		 * @param	string $Name	the Project-Name
		 *
		 * @author	Oliver Lippert
		 */
		public function setName($Name){
			$this->Name = $Name;
		}
		
		/**
		 * Returns the Visible-State of the Project
		 *
		 * @return	boolean	the Visible-State of the Project
		 *
		 * @author	Oliver Lippert
		 */
		public function isVisible(){
			return $this->Visible;
		}
		
		/**
		 * Defines the Visible-State of the Project
		 *
		 * @param	boolean $Visible	the Visible-State of the Project
		 *
		 * @author	Oliver Lippert
		 */
		public function setVisible($Visible){
			if(is_bool($Visible)){
				$this->Visible = $Visible;
			}
		}
		
		/**
		 * Returns the Budget of the Project
		 *
		 * @return	double	the Budget of the Project
		 *
		 * @author	Oliver Lippert
		 */
		public function getBudget(){
			return $this->Budget;
		}
		
		/**
		 * Defines the Budget of the Project
		 *
		 * @param	double $Budget	the Budget of the Project
		 *
		 * @author	Oliver Lippert
		 */
		public function setBudget($Budget){
			$this->Budget = $Budget;
		}
		
		/**
		 * Returns the Effort of the Project
		 *
		 * @return	double	the Effort of the Project
		 *
		 * @author	Oliver Lippert
		 */
		public function getEffort(){
			return $this->Effort;
		}
		
		/**
		 * Defines the Effort of the Project
		 *
		 * @param	double $Effort	the Effort of the Project
		 *
		 * @author	Oliver Lippert
		 */
		public function setEffort($Effort){
			$this->Effort = $Effort;
		}

		/**
		 * Returns the Approved of the Project
		 *
		 * @return	double	the Approved of the Project
		 *
		 * @author	Oliver Lippert
		 */
		public function getApproved(){
			return $this->Approved;
		}
		
		/**
		 * Defines the Approved of the Project
		 *
		 * @param	double $Approved	the Approved of the Project
		 *
		 * @author	Oliver Lippert
		 */
		public function setApproved($Approved){
			$this->Approved = $Approved;
		}

		/**
		 * Returns the Owner of the Project
		 *
		 * @return	Customer	the Owner of the Project
		 *
		 * @author	Oliver Lippert
		 */
		public function getOwner(){
			return $this->Owner;
		}
		
		/**
		 * Defines the Owner of the Project
		 *
		 * @param	Customer $Owner	the Owner of the Project
		 *
		 * @author	Oliver Lippert
		 */
		public function setOwner($Owner){
			if($Owner instanceof Customer || $Owner == null){
				$this->Owner = $Owner;
			}
		}

		/**
		 * Returns the stored Project-Information as an HTML-Formated String
		 *
		 * @return	string	the Project-Information
		 *
		 * @author	Oliver Lippert
		 */
		public function toString(){
			return "<div>#". $this->getID() .": ". $this->getName() ."<br />VISIBLE ". $this->isVisible() ."<br />BUDGET ". $this->getBudget() ."<br />EFFORT ". $this->getEffort() ."<br />APPROVED ". $this->getApproved() ."<br />OWNER ". $this->getOwner()->getName() ."</div>";
		}
	}
?>