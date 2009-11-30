<?php
	include("../config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	
	$news_list = mysql_query("SELECT * FROM news");
	echo "<table height=\"50%\"><tr><td>";
	while($row = mysql_fetch_array($news_list)) {
		echo $row['title'];
		echo "&nbsp;&nbsp;&nbsp;<a href=\"http://" . $hostname . $context . 
			"/admin/edit_news.php?id=" . $row['id'] . "\">Edit</a><br/>";
	}
	echo "</td></tr>";
	
	echo "<tr><td><a href=\"http://" . $hostname . $context . 
			"/admin/edit_news.php?id=" . 0 . "\">Add news</a><br/>";
	
	echo "</table>";

?>