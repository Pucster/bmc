<?php
	include("../config.php");
	include("../helpers.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	if ($_POST['id'] != 0) {
	$query = "UPDATE news SET title='" . $_POST['title'] . "', content='" . 
	$_POST['content'] . "',category_id='1' WHERE id='" . $_POST['id'] . "'";
	} else {
	$query ="INSERT INTO news (title,content,category_id) VALUES ('" . $_POST['title'] .
	"','" . $_POST['content'] . "','1')"; 
	}
	//$query = "UPDATE news SET title='" . $_POST['title'] . "' WHERE id='" . $_POST['id'] . "'"; 
	$result = mysql_query($query);
	//echo $query . "<br/>";
	
	//$query = "SELECT * FROM news WHERE id=" . $_POST['id'];
	//$result = mysql_query($query);
	//$news = mysql_fetch_array($result);
	//echo $news['title'] . "<br/>" . $news['content'];
	redirect('http://localhost:2080/bmc/admin/main.php');

?>