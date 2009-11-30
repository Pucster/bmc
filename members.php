<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$i = 0;
	echo "These are the good guys that are in our club:<br/>";
	echo "<table border=\"0\" cellspacing=\"0\" cellpading=\"0\">";
	// first row
	$members_list = mysql_query("SELECT * FROM members ORDER by name");
	$number_of_members = mysql_num_rows($members_list);
	echo "<tr>";
	while($row = mysql_fetch_array($members_list)) {
		$i = $i + 1;
		echo "<td>";
		$image = mysql_query("SELECT * FROM images where id=" . $row['profile_image']);
		while($row2 = mysql_fetch_array($image)) {
			echo "<img src=\"" . $row2['path'] . "/" . $row2['name'] . "\" height=\"100\" />";
		}
		echo "<br/>";
		#echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpading=\"0\">";
		echo "<b>" . $row['name'] . "</b> a.k.a. <b>" . $row['nickname'] . "</b><br />";
		#echo "Location: " . $row['location'] . "<br />";
		#echo "Ride: " . $row['ride'] . "<br />";
		#echo "Member since: " . $row['start_date'];
		echo "</td>";
		#echo "</table>";
		#echo "</td></tr>";
		if ($i % 4 == 0) echo "</tr><tr>";
	}
	
	echo "</tr>";
	echo "</table>";
?>