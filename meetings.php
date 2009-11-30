<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	echo "<table height=\"600\" border=\"0\" cellspacing=\"0\" cellpading=\"0\">";
	echo "<tr valign=\"top\">";
	$meetings_list = mysql_query("SELECT * FROM meetings");
	while($row = mysql_fetch_array($meetings_list)) {
		echo "<td><a href=\"#\" onClick=\"doStuff('http://localhost:2080/bmc/display.php','" . $row['year'] . "')\">" . $row['year'] . "</a></td>";
	}
	echo "</tr>";
	echo "</table>";
	echo "<div id=\"displayYear\">Select an year to display information about the meeting</div>";
?>