<?php

class DatabaseFunctions {
	
	private $db;
	
	function __construct() {
		include_once('database_connector.php');
		
		$this->db = new DatabaseConnector();
		$this->db->connect();
	}
	
	function __destruct() {
	
	}
	
	public function store_broadcasts() {
	
	}
}
?>