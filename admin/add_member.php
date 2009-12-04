<?php
	include("../config.php");
	include("../helpers.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$image_updated = false;
	if (isset($_FILES['imgfile']['name'])) {
		$image_updated = true;
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

		$result = mysql_query("INSERT INTO images VALUES (0,'" . $uploadedFileName . "',NULL,'images',0,NULL,NULL);");
		$image_id = mysql_result(mysql_query("SELECT id FROM images WHERE name like '" . $uploadedFileName . "'"),0);
		}
	}
	if ($_POST['id'] != '0') {
		if (isset($image_id)) {
			$query = "UPDATE members SET name='" . $_POST['name'] . "', nickname='" . $_POST['nickname']. "', location='" . $_POST['location'] . 
			"', profile_image='" . $image_id . "', ride='" . $_POST['ride'] . "', start_date='" . $_POST['start_date'] . 
			"',hidden='0' WHERE id='" . $_POST['id'] . "'";
		} else {
			$query = "UPDATE members SET name='" . $_POST['name'] . "', nickname='" . $_POST['nickname']. "', location='" . $_POST['location'] . 
			"', ride='" . $_POST['ride'] . "', start_date='" . $_POST['start_date'] . 
			"',hidden='0' WHERE id='" . $_POST['id'] . "'";
		}
	}
	else {
		$query ="INSERT INTO members (name,nickname,location,profile_image,ride,start_date,hidden) " .
		"VALUES ('" . $_POST['name'] . "','" . $_POST['nickname'] . "','" . $_POST['location'] . 
		"','" . $image_id . "','" . $_POST['ride'] . "','" . $_POST['start_date'] . "','0')"; 
	}
	
	$result = mysql_query($query);
	redirect(adminLink('main'));

?>