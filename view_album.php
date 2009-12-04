<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$i = 0;
	$pics_list = mysql_query("SELECT * FROM images WHERE album_id='" . $_GET['id'] . "'");
?>
<table border="0" cellspacing="20" cellpading="0">
<tr>
<?php
	while($pic = mysql_fetch_array($pics_list)) {
		$i = $i + 1;
?>
<td>
<table width="175" height="175" style="background-image:url(images/green_frame.JPG);background-repeat:no-repeat;">
<tr><td rowspan="3"></td><td ></td><td  rowspan="3"></td></tr>
<tr><td valign="center" align="center">
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/view_photo.php?id=<?php echo $pic['id'] ?>')">
<img src="http://<?php echo $hostname . $context . "/" . $pic['path'] . "/" . $pic['name']; ?>" height="125" width="125" />
</a>
</td></tr>
<tr><td></td></tr>
</table>
<table width="175" height="65" style="background-image:url(images/picture_tag.JPG);background-repeat:no-repeat;">
<tr><td valign="center" align="center">
<?php echo "<b>" . $pic['name'] . "</b><br/><b>" . $pic['alt'] . "</b>"; ?>
</td></tr></table>
</td>
<?php
		if ($i % 4 == 0) echo "</tr><tr>";
	}
?>	
</tr>
</table>