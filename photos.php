<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$i = 0;
	$album_list = mysql_query("SELECT * FROM albums WHERE hidden='0' ORDER by name");
?>
<table border="0" cellspacing="20" cellpading="0">
<tr>
<?php
	while($row = mysql_fetch_array($album_list)) {
		$front_pic = mysql_fetch_array(mysql_query("SELECT * FROM images WHERE id=" . $row['front_image']));
		$i = $i + 1;
?>
<td>
<table width="175" height="175" style="background-image:url(images/green_frame.JPG);background-repeat:no-repeat;">
<tr><td rowspan="3"></td><td ></td><td  rowspan="3"></td></tr>
<tr><td valign="center" align="center">
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/view_album.php?start=0&id=<?php echo $row['id']; ?>')">
<img src="http://<?php echo $hostname . $context . "/thumbs/" . $row['path'] . "/th_" . $front_pic['name']; ?>" height="125" width="125" />
</a>
</td></tr>
<tr><td></td></tr>
</table>
<table width="175" height="65" style="background-image:url(images/picture_tag.JPG);background-repeat:no-repeat;">
<tr><td valign="center" align="center">
<?php echo "<b>" . $row['name'] . "</b><br/><b>" . $row['description'] . "</b>"; ?>
</td></tr></table>
</td>
<?php
		if ($i % 4 == 0) echo "</tr><tr>";
	}
?>	
</tr>
</table>