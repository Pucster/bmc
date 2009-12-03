<?php
include ("../config.php");
include ("../helpers.php");
include ("../db.php");
include ("../top.php");
include ("../header.php");
?>


<?php

if (!isset($_POST['submit'])) {

include ("add_member_form.php");
}
else {
	$error = false;
	$error_message = '';
	// Do some checks
	if ($_POST['name'] == '') {
		$error_message .= '<p class="red">You have to enter a name!</p>';
		$error = true;
	}
	if ($_FILES['imgfile']['tmp_name'] == '') {
		$error_message .= '<p class="red">You have to specify a file for the profile picture!</p>';
		$error = true;
	}
	if ($error) { // Back to the form, with errors
		echo "<p class=\"red\">We got some problems:</p>" . $error_message;
		include ("add_member_form.php");
	}
	else { // everything is good
	//Check the image and upload it
	$imgfile = $_FILES['imgfile']['tmp_name'];
	$uploaddir = "c:/www/bmc/images";
    if (@is_uploaded_file($imgfile))
    {
		$extension = getFileExtension($_FILES['imgfile']['name']);
		$now = time();
		while(file_exists($newfile = $uploaddir.'/'.$now.'.'.$extension)) {
			$now++;
		}
		$uploadedFileName = $now.'.'.$extension;
		move_uploaded_file($_FILES['imgfile']['tmp_name'], $newfile);
    }
	// Add the image to the images table
	//$result = mysql_query("INSERT INTO images VALUES (0,'" . $uploadedFileName . "',NULL,'images',0,NULL,NULL);");
	// Get image id for what we've just inserted
	//$image_id = mysql_result(mysql_query("SELECT id FROM images WHERE name like '" . $uploadedFileName . "'"),0);
	// Prepare query for inserting the member into members table
	$query = "INSERT INTO members VALUES (0,'"	. $_POST['name'] . "','" . $_POST['nickname'] . "','" .
	$_POST['location'] . "'," . $image_id . ",'" . $_POST['ride'] . "','" . $_POST['since'] . "');";
	//$result = mysql_query($query);
	echo "Member added!<br/> Click <a href=\"" . $_SERVER['PHP_SELF'] . "\">here</a> to add another one or " . 
	"<a href=\"http://" . $hostname . "/bmc/members.php\">here</a> to list the current members.";
	}
	}
?>

<?php
include ("../bottom.php");
include ("../end.php");
?>