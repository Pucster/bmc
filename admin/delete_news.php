<?php
	include("../config.php");
	include("../helpers.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$query = "DELETE FROM news WHERE id='" . $_GET['id'] . "'";
	$result = mysql_query($query);
	//echo $query . "<br/>";
	
	//$query = "SELECT * FROM news WHERE id=" . $_POST['id'];
	//$result = mysql_query($query);
	//$news = mysql_fetch_array($result);
	//echo $news['title'] . "<br/>" . $news['content'];
	redirect(adminLink('news'));

?>