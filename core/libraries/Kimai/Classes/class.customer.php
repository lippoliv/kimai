<?php
	include_once 'class.adress.php';
	
	/**
	 * Represents an Kimai-Customer with all of his propertys and all of his relevant functionalitys
	 * 
	 * @author	Oliver Lippert
	 */
	class Customer{
		private $ID;
		private $Name;
		private $Comment;
		private $Visible;
		private $Company;
		private $Deleted;
		private $Adress;
		
		/**
		 * Returns the ID of the Customer
		 * 
		 * @return	double	the Customer-ID
		 * 
		 * @author	Oliver Lippert
		 */
		public function getID(){
			return $this->ID;
		}
		
		/**
		 * Defines the ID of the Customer
		 * 
		 * @param	String	the new Customer-ID
		 * 
		 * @author	Oliver Lippert
		 */
		public function setID($ID){
			$this->ID = $ID;
		}
		
		/**
		 * Returns the Name of the Customer
		 * 
		 * @return	string	the Customer-Name
		 * 
		 * @author	Oliver Lippert
		 */
		public function getName(){
			return $this->Name;
		}
		
		/**
		 * Defines the Name of the Customer
		 * 
		 * @param	String	the new Customer-Name
		 * 
		 * @author	Oliver Lippert
		 */
		public function setName($Name){
			$this->Name = $Name;
		}
		
		/**
		 * Returns the Comment for the Customer
		 * 
		 * @return	string	the Customer-Comment
		 * 
		 * @author 	Oliver Lippert
		 */
		public function getComment(){
			return $this->Comment;
		}
		
		/**
		 * Defines the Comment for the Customer
		 * 
		 * @param	String	the Customer-Comment
		 * 
		 * @author	Oliver Lippert
		 */
		public function setComment($Comment){
			$this->Comment = $Comment;
		}
		
		/**
		 * Returns the Visiblity-State of the Customer
		 * 
		 * @return	bool	the Customer-Visibility-State
		 * 
		 * @author	Oliver Lippert
		 */
		public function isVisible(){
			return $this->Visible;
		}
		
		/**
		 * Defines the Visibility-State of the Customer
		 * 
		 * @param	bool	the Customer-Visibility-State
		 * 
		 * @author	Oliver Lippert
		 */
		public function setVisible($Visible){
			$this->Visible = $Visible;
		}
		
		/**
		 * Returns the Company of the Customer
		 * 
		 * @return	string	the Cusomer-Company
		 * 
		 * @author	Oliver Lippert
		 */
		public function getCompany(){
			return $this->Company;
		}
		
		/**
		 * Defines the Company of the Customer
		 * 
		 * @param	String	the Cusomer-Company
		 * 
		 * @author	Oliver Lippert
		 */
		public function setCompany($Company){
			$this->Comment = $Company;
		}
		
		/**
		 * Returns the Deletion-State of the Customer
		 * 
		 * @return	bool	the Customer-Deletion-State
		 * 
		 * @author	Oliver Lippert
		 */
		public function isDeleted(){
			return $this->Deleted;
		}
		
		/**
		 * Deletes the Customer
		 * 
		 * <b>NOTE:</b>
		 * Because it will call a list of functions (deleting Cusomers Project, ...), I don't want
		 * to realize it with an simple setter. As an own function it has "more weight".
		 * 
		 * @author	Oliver Lippert
		 */
		public function Delete(){
			$this->Deleted = true;
		}
		
		/**
		 * Undeletes the Customer
		 * 
		 * <b>NOTE:</b>
		 * Because it will call a list of functions (undeleting Cusomers Project, ...), I don't want
		 * to realize it with an simple setter. As an own function it has "more weight".
		 * 
		 * @author	Oliver Lippert
		 */
		public function UnDelete(){
			$this->Deleted = false;
		}
		
		/**
		 * Returns the Adress of the Customer
		 * 
		 * @return	Adress	the Customers Adress
		 * 
		 * @author	Oliver Lippert
		 */
		public function getAdress(){
			return $this->Adress;
		}
		
		/**
		 * Defines the Adress of the Customer
		 * 
		 * @param	Adress	the Customers Adress
		 * 
		 * @author	Oliver Lippert
		 */
		public function setAdress($Adress){
			$this->Adress = $Adress;
		}
		
		/**
		 * Returns all the Customers propertys in an simple String.
		 * 
		 * @return	string	all Customers propertys
		 */
		public function toString(){
			return "<div>#". $this->getID() .": ". $this->getName() ."<br />COMPANY ". $this->getCompany() ."<br />COMMENT ". $this->getComment() ."<br />VISIBLE ". $this->isVisible() ."<br />DELETED ". $this->isDeleted() ."<br>ADRESS ". $this->getAdress()->toString() ."</div>";
		}
	}
?>