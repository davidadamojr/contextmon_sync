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
		
		$connection = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		mysql_select_db(DB_DATABASE)
		
		return $connection;
	}
	
	// Close database connection
	public function close() {
		mysql_close();
	}
}
?>