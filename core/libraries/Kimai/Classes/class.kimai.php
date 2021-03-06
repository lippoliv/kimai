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
		
		/**
		 * 
		 * @var Project[]
		 */
		private $Projects;
		
		/**
		 * 
		 * @var Customer[]
		 */
		private $Customers;
		
		/**
		 * 
		 * @var Activity[]
		 */
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
		 * @return	Project[]	all through Kimai managed Projects
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
		 * @return	Customer[]	all through Kimai managed Customers
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
		 * @param	Project $Project	<i>(optional)</i> the Project to filter for
		 * 
		 * @return	Activity[]	all through Kimai managed Activities
		 * 
		 * @author	Oliver Lippert
		 */
		public function getActivities($Project = null){
			$ret = null;
			
			if($this->Activities == null && $Project == null){
				$this->Activities = $this->Datastorage->getActivities();
			}
			
			if($Project == null){
				$ret = $this->Activities;
			} else {
				$ret = $this->Datastorage->getActivitiesForProject($Project);
			}
			
			return $ret;
		}
	}
?>