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
	 * Represents the Kimai-Application. Should be used for accessing everything, that belongs to Kimai, such as Projects, Customers, ...
	 * 
	 * @author	Oliver Lippert
	 */
	class Kimai{
		private $Datastorage;
		private $Projects;
		private $Customers;
		private $Activities;
		
		/**
		 * Initializes the Kimai-Instance
		 * 
		 * @author	Oliver Lippert
		 */
		public function __construct(){
			global $database;
			
			$this->Datastorage = $database;
			$this->Projects = null;
			$this->Customers = null;
		}
		
		/**
		 * Returns all through Kimai managed Projects
		 * 
		 * @return	Array	all through Kimai managed Projects
		 * 
		 * @author	Oliver Lippert
		 */
		public function getProjects(){
			if($this->Projects == null){
				$this->Projects = $this->Datastorage->getProjects();
			}
			
			return $this->Projects;
		}
		
		/**
		 * Returns all through Kimai managed Customers
		 * 
		 * @return	Array	all through Kimai managed Customers
		 * 
		 * @author	Oliver Lippert
		 */
		public function getCustomers(){
			if($this->Customers == null){
				$this->Customers = $this->Datastorage->getCustomers();
			}
			
			return $this->Customers;
		}
		
		/**
		 * Returns all through Kimai managed Activities
		 * 
		 * @return	Array	all through Kimai managed Activities
		 * 
		 * @author	Oliver Lippert
		 */
		public function getActivities(){
			if($this->Activities == null){
				$this->Activities = $this->Datastorage->getActivities();
			}
			
			return $this->Activities;
		}
	}
?>