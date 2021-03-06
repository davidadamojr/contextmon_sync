<?php
include_once('db_functions.php');

$db = new DatabaseFunctions();

// Get JSON posted by ContextMon android application
$json = $_POST['broadcasts_json'];
// remove slashes that may have been automatically inserted
if (get_magic_quotes_gpc()) {
	$json = stripslashes($json);
}

$data = json_decode($json);

$query_response = $db->store_broadcasts($data);
$json_response = array();
if ($query_response) {
	// query succeeded
	$json_response['success'] = 'yes';
} else {
	$json_response['success'] = 'no';
}

echo json_encode($json_response);
?>