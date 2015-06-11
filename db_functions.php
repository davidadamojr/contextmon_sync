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
	
	public function store_broadcasts($data) {
		$sql = [];
		foreach ($data as $row) {
			$sql[] = "('" . $row->device_id . "', '" . $row->timestamp . "', '" . $row->action . "', '" . $row->extras . "', '" . $row->android_version . "', "
			. $row->is_tablet . ")";
		}
		
		$query = "INSERT INTO broadcasts (device_id, timestamp, action, extras, android_version, is_tablet) VALUES " . implode(',', $sql);
		echo $query;
		$result = mysqli_query($this->db->connection, $query);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}
}
?>
