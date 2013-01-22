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
		 * Initializes the Kimai-Instance
		 * 
		 * @author	Oliver Lippert
		 */
		public function __construct(){
			global $database;
			
			$this->Datastorage = $database;
		}
	}
?>