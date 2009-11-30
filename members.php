<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$i = 0;
	echo "These are the good guys that are in our club:<br/>";
	echo "<table border=\"0\" cellspacing=\"20\" cellpading=\"0\">";
	// first row
	$members_list = mysql_query("SELECT * FROM members ORDER by name");
	$number_of_members = mysql_num_rows($members_list);
	echo "<tr>";
	while($row = mysql_fetch_array($members_list)) {
		$i = $i + 1;
		echo "<td>";
		echo "<table width=\"175\" height=\"175\" style=\"background-image:url(images/green_frame.JPG);background-repeat:no-repeat;\">";
		echo "<tr><td rowspan=\"3\"></td><td ></td><td  rowspan=\"3\"></td></tr>";
		echo "<tr><td valign=\"center\" align=\"center\">";
		$image = mysql_query("SELECT * FROM images where id=" . $row['profile_image']);
		while($row2 = mysql_fetch_array($image)) {
			echo "<a href=\"#\" onClick=\"changeMainContent('http://" . $hostname . $context . "/member_page.php?id=" . $row['id'] . "')\">";
			echo "<img src=\"" . $row2['path'] . "/" . $row2['name'] . "\" height=\"125\" width=\"125\" />";
			echo "</a>";
		}
		echo "</td></tr>";
		echo "<tr><td></td></tr>";
		echo "</table>";
		echo "<table width=\"175\" height=\"65\" style=\"background-image:url(images/picture_tag.JPG);background-repeat:no-repeat;\">";
		echo "<tr><td valign=\"center\" align=\"center\">";
		echo "<b>" . $row['name'] . "</b><br/> a.k.a. <b>" . $row['nickname'] . "</b>";
		echo "</td></tr></table>";
		echo "</td>";
		if ($i % 4 == 0) echo "</tr><tr>";
	}
	
	echo "</tr>";
	echo "</table>";
?>