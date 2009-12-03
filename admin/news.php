<?php
	include("../config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	
	$news_list = mysql_query("SELECT * FROM news ORDER BY post_date DESC");
	echo "<table border=0 width=\"100%\" height=\"100%\" valign=\"top\" cellpadding=\"2\">";
	echo "<tr><td colspan=7><a href=\"#\" onClick=\"changeMainContent('http://" . $hostname . $context . 
			"/admin/edit_news.php?id=" . 0 . "')\">Add news</a></td></tr>";
	while($row = mysql_fetch_array($news_list)) {
		echo "<tr><td width=\"1%\">" . $row['post_date'] . "</td>";
		echo "<td width=\"90%\" class=\"adminNewsTitle\">" . $row['title'] . "</td>";
		
		echo "<td width=\"5%\"><a href=\"#\" onClick=\"changeMainContent('http://" . $hostname . $context . "/admin/edit_news.php?id=" . $row['id'] . "')\">Edit</a></td>";
		echo "<td width=\"5%\"><a href=\"#\" onClick=\"changeMainContentWithConfirmation('http://" . $hostname . $context . "/admin/delete_news.php?id=" . $row['id'] . "', 'Are you sure you want to delete this news: " . $row['title'] . "')\">Delete</a></td>";
		echo "</tr>";
	}
	
	echo "<tr><td colspan=7><a href=\"#\" onClick=\"changeMainContent('http://" . $hostname . $context . 
			"/admin/edit_news.php?id=" . 0 . "')\">Add news</a></td></tr>";
	
	echo "</table>";

?>