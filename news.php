<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$news_list = mysql_query("SELECT * FROM news");
	echo "<table><tr><td>";
	while($row = mysql_fetch_array($news_list)) {
		echo $row['title'] . "<br/>";
	}
	echo "</td></tr></table>";
?>
	

