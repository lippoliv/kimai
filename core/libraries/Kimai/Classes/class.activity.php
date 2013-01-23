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
		private $ID;
		private $Name;
		
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
		 * Returns the stored Activity-Information as an HTML-Formated String
		 *
		 * @return	string	the Project-Information
		 *
		 * @author	Oliver Lippert
		 */
		public function toString(){
			return "<div>#". $this->getID() .": ". $this->getName() ."</div>";
		}
	}
?>