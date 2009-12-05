<?php
	include("../config.php");
	include("../helpers.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$image_updated = false;
	$hidden = 0;
	logToFile('c:\log.log', $_POST['hidden']);
	if ($_POST['hidden'] == 'hidden') $hidden=1;
	if ($_POST['id'] != '0') {
		$query = "UPDATE albums SET name='" . $_POST['name'] . "', description='" . $_POST['description'] . "',hidden='" . $hidden . "' WHERE id='" . $_POST['id'] . "'";
		logToFile('c:\log.log', $hidden);
	}
	else {
		$query ="INSERT INTO albums (name,description,path,hidden) " .
		"VALUES ('" . $_POST['name'] . "','" . $_POST['description'] . "','" . $_POST['path'] . "','" . $hidden . "')"; 
		logToFile('c:\log.log', $hidden);
	}
	logToFile('c:\log.log', $query);
	$create_directory = mkdir ($root_dir . "/images/" . $_POST['name']);
	$create_thumbs_directory = mkdir ($root_dir . "/thumbs/" . $_POST['name']);
	$result = mysql_query($query);
	redirect(adminLink('main'));

?>