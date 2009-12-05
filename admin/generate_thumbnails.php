<?php
	include("../config.php");
	include("../helpers.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	
	$album_id=$_GET['album_id'];
	$path = mysql_result(mysql_query("SELECT path FROM albums WHERE id='" . $album_id . "'"),0);
	$files = scandir($root_dir . '/images/' . $path);
	if (!file_exists($root_dir . '/thumbs/' . $path)) mkdir($root_dir . '/thumbs/' . $path);
	foreach($files as $key => $name) {
		if ($name == '.' || $name == '..') continue;
		$system=explode('.',$name);
		if (preg_match('/jpg|jpeg|png/',strtolower($system[1]))){
			//echo "This can have a thumbnail -> " . $name . "<br/>";
			createthumb($root_dir.'/images/'.$path.'/'.$name,$root_dir.'/thumbs/'.$path.'/'.'th_'.$name,150,150);
		}
	}
redirect(adminLink('images'));
?>