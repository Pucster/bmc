<?php
	include("../config.php");
	include("../helpers.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$query = "DELETE FROM members WHERE id='" . $_GET['id'] . "'";
	$result = mysql_query($query);
	redirect(adminLink('members'));
?>