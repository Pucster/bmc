<?php
include ("../config.php");
include ("../helpers.php");
mysql_connect ($sql_host, $sql_user, $sql_pass);
mysql_select_db ($sql_db);
if ($_GET['id'] != '0') {
	$member_id = $_GET['id'];
	$result = mysql_query("SELECT * FROM members WHERE id=" . $member_id);
	$member = mysql_fetch_array($result);
	$member_name = $member['name'];
	
} else {
	$member_id = '0';
	$member_name = '';
}
?>

<form action="http://localhost:2080/bmc/admin/add_member.php" enctype="multipart/form-data" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type="hidden" name="id" value="<?php echo $member_id; ?>">
<table width="80%" align="center">
<tr>
<td align="right"><b>*Name:</b></td>
<td><input type="text" name="name" value="<?php echo $member['name']; ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Nickname:</b></td>
<td><input type="text" name="nickname" value="<?php if (isset($_POST['nickname'])) echo $_POST['nickname'] ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Location:</b></td>
<td><input type="text" name="location" value="<?php if (isset($_POST['location'])) echo $_POST['location'] ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Ride:</b></td>
<td><input type="text" name="ride" value="<?php if (isset($_POST['ride'])) echo $_POST['ride'] ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Member since:</b></td>
<td><input type="text" name="since" value="<?php if (isset($_POST['since'])) echo $_POST['since'] ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>*Image:</b></td>
<td><input type="file" name="imgfile" value="<?php if (isset($_FILES['imgfile']['tmp_name'])) echo $_FILES['imgfile']['tmp_name'] ?>" /> </td>
</tr>
<tr>
<td></td>
<td align="right"><input type="submit" name="submit" value ="Add member" /></td>
</tr>
</table>
Note: Fields marked with a '*' are mandatory!

</form>

<?php



if (!isset($_POST['submit'])) {
if ($_GET['id'] == '0') echo 'Adding new member';
if ($_GET['id'] != '0') {
	echo 'Editing existing member';
	$member = mysql_fetch_array(mysql_query("SELECT * FROM members WHERE id=".$_GET['id']))
}
include ("edit_member_form.php");
}
else {
//	$error = false;
//	$error_message = '';
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