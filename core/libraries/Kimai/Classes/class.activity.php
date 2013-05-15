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

	/**
	 * Represents information about an Activity
	 * 
	 * @author	Oliver Lippert
	 */
	class Activity{
		/**
		 * 
		 * @var unknown
		 */
		private $ID;
		
		/**
		 * 
		 * @var unknown
		 */
		private $Name;
		
		/**
		 * 
		 * @var unknown
		 */
		private $Visible;
		
		/**
		 * 
		 * @var unknown
		 */
		private $Comment;
		
		/**
		 * 
		 * @var unknown
		 */
		private $Deleted;
		
		/**
		 * 
		 * @var unknown
		 */
		private $Budget;
		
		/**
		 * 
		 * @var unknown
		 */
		private $Effort;
		
		/**
		 * 
		 * @var unknown
		 */
		private $Approved;
		
		/**
		 * Initializes the propertys of the Object
		 * 
		 * @author	Oliver Lippert
		 */
		public function __construct(){
			$this->setBudget(0);
			$this->setEffort(0);
			$this->setApproved(0);
		}
		
		/**
		 * Returns the ID of the Activity
		 *
		 * @return	double	the Activity-ID
		 *
		 * @author	Oliver Lippert
		 */
		public function getID(){
			return $this->ID;
		}
		
		/**
		 * Defines the ID of the Activity
		 *
		 * @param	double $ID	the Activity-ID
		 *
		 * @author	Oliver Lippert
		 */
		public function setID($ID){
			$this->ID = $ID;
		}
		
		/**
		 * Returns the Name of the Activity
		 *
		 * @return	string	the Activity-Name
		 *
		 * @author	Oliver Lippert
		 */
		public function getName(){
			return $this->Name;
		}
		
		/**
		 * Defines the Name of the Activity
		 *
		 * @param	string $Name	the Activity-Name
		 *
		 * @author	Oliver Lippert
		 */
		public function setName($Name){
			$this->Name = $Name;
		}
		
		/**
		 * Returns the Visibility of the Activity
		 *
		 * @return	bool	the Activity-Visibility
		 *
		 * @author	Oliver Lippert
		 */
		public function isVisible(){
			return $this->Visible;
		}
		
		/**
		 * Defines the Visibility of the Activity
		 *
		 * @param	bool $Visible	the Activity-Visibility
		 *
		 * @author	Oliver Lippert
		 */
		public function setVisible($Visible){
			$this->Visible = $Visible;
		}
		
		/**
		 * Returns the Comment of the Activity
		 *
		 * @return	string	the Activity-Comment
		 *
		 * @author	Oliver Lippert
		 */
		public function getComment(){
			return $this->Comment;
		}
		
		/**
		 * Defines the Comment of the Activity
		 *
		 * @param	string $Comment	the Activity-Comment
		 *
		 * @author	Oliver Lippert
		 */
		public function setComment($Comment){
			$this->Comment = $Comment;
		}
		
		/**
		 * Returns the Deletion-State of the Activity
		 *
		 * @return	bool	the Activity-Deletion-State
		 *
		 * @author	Oliver Lippert
		 */
		public function isDeleted(){
			return $this->Deleted;
		}
		
		/**
		 * Defines the Deletion-State of the Activity
		 *
		 * @param	bool $Deleted	the Activity-Deletion-State
		 *
		 * @author	Oliver Lippert
		 */
		public function setDeleted($Deleted){
			$this->Deleted = $Deleted;
		}
		
		/**
		 * Returns the Budget of the Activity
		 *
		 * @return	double	the Budget of the Activity
		 *
		 * @author	Oliver Lippert
		 */
		public function getBudget(){
			return $this->Budget;
		}
		
		/**
		 * Defines the Budget of the Activity
		 *
		 * @param	double $Budget	the Budget of the Activity
		 *
		 * @author	Oliver Lippert
		 */
		public function setBudget($Budget){
			if(is_double($Budget) || is_int($Budget)){
				$this->Budget = (double) $Budget;
			}
		}
		
		/**
		 * Returns the Effort of the Activity
		 *
		 * @return	double	the Effort of the Activity
		 *
		 * @author	Oliver Lippert
		 */
		public function getEffort(){
			return $this->Effort;
		}
		
		/**
		 * Defines the Effort of the Activity
		 *
		 * @param	double $Effort	the Effort of the Activity
		 *
		 * @author	Oliver Lippert
		 */
		public function setEffort($Effort){
			if(is_double($Effort) || is_int($Effort)){
				$this->Effort = $Effort;
			}
		}
		
		/**
		 * Returns the Approved of the Activity
		 *
		 * @return	double	the Approved of the Activity
		 *
		 * @author	Oliver Lippert
		 */
		public function getApproved(){
			return $this->Approved;
		}
		
		/**
		 * Defines the Approved of the Activity
		 *
		 * @param	double $Approved	the Approved of the Activity
		 *
		 * @author	Oliver Lippert
		 */
		public function setApproved($Approved){
			if(is_double($Approved) || is_int($Approved)){
				$this->Approved = $Approved;
			}
		}
		
		/**
		 * Returns the stored Activity-Information as an HTML-Formated String
		 *
		 * @return	string	the Project-Information
		 *
		 * @author	Oliver Lippert
		 */
		public function toString(){
			return "<div>#". $this->getID() .": ". $this->getName() ."<br />VISIBLE ". $this->isVisible() ."<br />COMMENT ". $this->getComment() ."<br />DELETED ". $this->isDeleted() ."<br />BUDGET ". $this->getBudget() ."<br />EFFORT ". $this->getEffort() ."<br />APPROVED ". $this->getApproved() ."</div>";
		}
	}
?>