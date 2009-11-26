<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" align="center">
<?php include ("menu.php"); ?>
</td></tr>
<tr>
<td align="center">
<?php
$pagename = $_SERVER['PHP_SELF'];
if ( $pagename == "/bmc/members.php") {
	$i = 0;
	echo "<br/><br/><br/><br/><br/>";
	echo "<table width=\"70%\" border=\"0\" cellspacing=\"0\" cellpading=\"0\">";
	echo "<tr>";
	$members_list = mysql_query("SELECT * FROM members ORDER by name");
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
	echo "</table>";
	}
if ( $pagename == "/bmc/index.php") {
	$news_list = mysql_query("SELECT * FROM news");
	while($row = mysql_fetch_array($news_list)) {
		echo $row['title'] . "<br/>";
	}
}
?>


</td>
</tr>
</table>