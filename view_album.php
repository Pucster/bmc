<?php
	include ("config.php");
	include ("helpers.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$i = 0;
	$result = mysql_query("SELECT path,name FROM albums WHERE id='" . $_GET['id'] . "'");
	$albumPath = mysql_result($result,0,0);
	$albumName = mysql_result($result,0,1);
	$start = $_GET['start'];
	$maxPics = mysql_num_rows(mysql_query("SELECT * FROM images WHERE album_id='" . $_GET['id'] . "'"));
	$pics_list = mysql_query("SELECT * FROM images WHERE album_id='" . $_GET['id'] . "' LIMIT " . $start . ",8");
	$next = $start + 8;
	$prev = $start - 8;
?>
<table border="0" cellspacing="20" cellpading="0">
<tr><td><?php echo $albumName; ?></td></tr>
<tr><td colspan=2 align="left">
<?php if ($prev >= 0) { ?>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/view_album.php?start=<?php echo $prev;?>&id=<?php echo $_GET['id']; ?>')">Previous page</a>
<?php } ?>
</td><td colspan=2 align="right">
<?php if ($next < $maxPics) { ?>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/view_album.php?start=<?php echo $next;?>&id=<?php echo $_GET['id']; ?>')">Next page</a>
<?php } ?>
</td></tr>
<tr>
<?php
	while($pic = mysql_fetch_array($pics_list)) {
		$i = $i + 1;
?>
<td>
<table width="175" height="175" style="background-image:url(images/green_frame.JPG);background-repeat:no-repeat;">
<tr><td rowspan="3"></td><td ></td><td  rowspan="3"></td></tr>
<tr><td valign="center" align="center">
<a target="_blank" href="http://<?php echo $hostname . $context . "/images/" . $albumPath . "/" . $pic['name']; ?>">
<img src="http://<?php echo $hostname . $context . "/thumbs/" . $albumPath . "/th_" . $pic['name']; ?>" height="125" width="125" />
</a>
</td></tr>
<tr><td></td></tr>
</table>
<table width="175" height="65" style="background-image:url(images/picture_tag.JPG);background-repeat:no-repeat;">
<tr><td valign="center" align="center">
<?php echo "<b>" . $pic['alt'] . "</b>"; ?>
</td></tr></table>
</td>
<?php
		if ($i % 4 == 0) echo "</tr><tr>";
	}
?>	
</tr>
<tr><td colspan=2 align="left">
<?php if ($prev >= 0) { ?>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/view_album.php?start=<?php echo $prev;?>&id=<?php echo $_GET['id']; ?>')">Previous page</a>
<?php } ?>
</td><td colspan=2 align="right">
<?php if ($next < $maxPics) { ?>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/view_album.php?start=<?php echo $next;?>&id=<?php echo $_GET['id']; ?>')">Next page</a>
<?php } ?>
</td></tr>
</table>
