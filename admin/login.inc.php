<?php
// Include required MySQL configuration file and functions
require_once('../config.php');
require_once('../helpers.php');
 
// Start session
session_start();
 // Check if user is already logged in
if ($_SESSION['logged_in'] == true) {
	// If user is already logged in, redirect to main page
	redirect('index.php');
} else {
	// Make sure that user submitted a username/password and username only consists of alphanumeric chars
	if ( (!isset($_POST['username'])) || (!isset($_POST['password'])) OR
	     (!ctype_alnum($_POST['username'])) ) {
		redirect('login.php');
	}
 
	// Connect to database
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
 
	// Escape any unsafe characters before querying database
//	$username = $mysqli->real_escape_string($_POST['username']);
//	$password = $mysqli->real_escape_string($_POST['password']);
	$username = $_POST['username'];
	$password = $_POST['password'];
	// Construct SQL statement for query & execute
	$sql	= "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . md5($password) . "'";
	$result = mysql_query($sql);
	
	$row = mysql_fetch_array($result);
	
	// If one row is returned, username and password are valid
	if (mysql_num_rows($result) == 1) {
		// Set session variable for login status to true
		$_SESSION['logged_in'] = true;
		$_SESSION['user_id'] = $row['id'];
		redirect('index.php');
	} else {
		// If number of rows returned is not one, redirect back to login screen
		redirect('login.php');
	}
}
?>