<?php

class DatabaseConnector {
	
	// constructor
	function __construct() {
	
	}
	
	// destructor
	function __destruct() {
	
	}
	
	// make connection to database
	public function connect() {
		require_once('config.php');
		
		$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
		
		return $this->connection;
	}
	
	// Close database connection
	public function close() {
		mysqli_close($this->connection);
	}
}
?>