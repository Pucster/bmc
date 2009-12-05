<?php
	include("../config.php");
	include("../helpers.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	if (isset($_FILES['imgfile']['name'])) {
		$album_id = $_POST['album_id'];
		if ($album_id != 0) {
			$album_path = mysql_result(mysql_query("SELECT path FROM albums WHERE id='" . $album_id . "'"),0);
		} else {
			$album_path = '';
		}
		$imgfile = $_FILES['imgfile']['tmp_name'];
		$uploaddir = $root_dir . "/images/" . $album_path;
		if (@is_uploaded_file($imgfile))
		{
			$extension = getFileExtension($_FILES['imgfile']['name']);
			$now = time();
			while(file_exists($newfile = $uploaddir.'/'.$now.'.'.$extension)) {
				$now++;
			}
			$uploadedFileName = $now.'.'.$extension;
			move_uploaded_file($_FILES['imgfile']['tmp_name'], $newfile);
			createthumb($root_dir . "/images/" . $album_path . "/" . $uploadedFileName, 
				$root_dir . "/thumbs/" . $album_path . "/th_" . $uploadedFileName, 150, 150);
		}
	}
	if ($_POST['id'] == '0') {
		$query = "INSERT INTO images VALUES (0,'" . $uploadedFileName . "','" . $_POST['alt'] . "',0,'" . $album_id . "',NULL);";
		$result = mysql_query($query);
		$front_id = mysql_result(mysql_query("SELECT id FROM images WHERE name='" . $uploadedFileName . "'"),0);
	} else {
		$query = "UPDATE images SET alt='" . $_POST['alt'] . "' WHERE id='" . $_POST['id'] . "'";
		$front_id = $_POST['id'];
	}
	
	
	if ($_POST['frontImage'] == 'frontImage') {
		$query = "UPDATE albums SET front_image='" . $front_id . "' WHERE id='" . $_POST['album_id'] . "'";
		$result = mysql_query($query);
	}

	redirect(adminLink('main'));

?>