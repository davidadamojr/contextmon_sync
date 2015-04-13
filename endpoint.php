<?php
include_once('db_functions.php');

$db = new DatabaseFunctions();

// Get JSON posted by ContextMon android application
$json = $_POST['broadcasts'];
// remove slashes that may have been automatically inserted
if (get_magic_quotes_gpc()) {
	$json = stripslashes($json);
}

$data = json_decode($json);
$insert_query = 'INSERT INTO broadcasts (device_id, timestamp, action, extras, android_version) VALUES ';

$response = array();

echo json_encode($response);
?>