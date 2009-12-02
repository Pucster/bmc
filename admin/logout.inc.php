<?php
// Start session
session_start();
 
// Include required functions file
require_once('../helpers.php');
 
// If not logged in, redirect to login screen
// If logged in, unset session variable and display logged-out message
if (check_login_status() == false) {
	// Redirect to 
	redirect('login.php');
} else {
	// Kill session variables
	unset($_SESSION['logged_in']);
	unset($_SESSION['username']);
 
	// Destroy session
	session_destroy();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
	<title>Creating a Simple PHP and MySQL-Based Login System - dev.thatspoppycock.com</title>
</head>
<body>
<h1>Logged Out</h1>
<p>You have successfully logged out. Back to <a href="login.php">login</a> screen.</p>
</body>
</html>