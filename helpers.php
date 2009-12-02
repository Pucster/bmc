<?php
    include('config.php');
	function getFileExtension($str) {

        $i = strrpos($str,".");
        if (!$i) { return ""; }

        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);

        return $ext;

    }
	
	function addInputValue($str) {
		return $str;
	}
	
	function redirect($page) {
	header('Location: ' . $page);
	exit();
	}
	
	function check_login_status() {
	// If $_SESSION['logged_in'] is set, return the status
	if (isset($_SESSION['logged_in'])) {
		return $_SESSION['logged_in'];
	}
	return false;
	}
	
	function logToFile($filename, $msg)
	{ 
	// open file
	$fd = fopen($filename, "a");
	
	// write string
	fwrite($fd, $msg . "\n");
	
	// close file
	fclose($fd);
	}
	
	function adminLink($str)
	{
		return "http://" . $GLOBALS['hostname'] . $GLOBALS['context'] . "/admin/" . $str . ".php";
	}

	
?>