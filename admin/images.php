<?php
include ("../config.php");
mysql_connect ($sql_host, $sql_user, $sql_pass);
mysql_select_db ($sql_db);

if (isset($_GET['album_id'])) {
	$album_id = $_GET['album_id'];
} else {
	$album_id = 0;
}
if (isset($_GET['start'])) {
	$start = $_GET['start'];
} else {
	$start = 0;
}

$image_list = mysql_query("SELECT * FROM images WHERE album_id='" . $album_id . "'");
$numberOfImages = mysql_num_rows($image_list);
$prev = $start - 5;
$next = $start + 5;
$image_list = mysql_query("SELECT * FROM images WHERE album_id='" . $album_id . "' LIMIT " . $start . ",5");
if ($album_id != 0) $album_path = mysql_result(mysql_query("SELECT path FROM albums WHERE id='".$album_id."'"),0);
$album_list = mysql_query("SELECT * FROM albums");
$albums = array();
while ($row = mysql_fetch_array($album_list)) {
	$albums += array($row['id'] => $row['name']);
}

?>
<table width="80%" border=1>
<!-- Select album start -->
<tr>
<td colspan=2><form action="#" enctype="multipart/form-data" method="post">
<label for="album">Select album: </label>
<select name="album" size="1">
<option <?php if ($album_id == '0') echo "selected=\"1\""; ?> onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/images.php?album_id=0>')">Stray images</option>
<?php foreach($albums as $id => $name) { ?>
<option <?php if ($album_id == $id) echo "selected=\"1\""; ?> onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/images.php?album_id=<?php echo $id; ?>')"><?php echo $name; ?></option>
<?php } ?>
</select>
</form></td>
</tr>
<!-- Select album end -->
<!-- Upper page navigation start -->
<tr><td align="left">
<?php if ($prev >= 0) { ?>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/images.php?start=<?php echo $prev;?>&album_id=<?php echo $album_id; ?>')">Previous page</a>
<?php } ?>
</td><td align="right">
<?php if ($next < $numberOfImages) { ?>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/images.php?start=<?php echo $next;?>&album_id=<?php echo $album_id; ?>')">Next page</a>
<?php } ?>
</td></tr>
<!-- Upper page navigation end -->
</table>
<table width="80%" border=1>
<!-- Upper add image start -->
<tr>
<tr><td>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/edit_image.php?id=<?php echo "0"; ?>&album_id=<?php echo $album_id; ?>')">
Add image
</a>
</td>
<?php if (mysql_num_rows($image_list) != 0) { ?>
<td>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/generate_thumbnails.php?album_id=<?php echo $album_id; ?>')">
Generate thumbnails
</a>
</td>
<?php } ?>
</tr>
<!-- Upper page add image end -->
<?php while($row = mysql_fetch_array($image_list)) { ?>
<tr>
<td width="30%">
<a target="_blank" href="<?php echo "http://" . $hostname . $context . "/images/" . $album_path . "/" . $row['name']; ?>"
<img height="50" src="<?php echo "http://" . $hostname . $context . "/thumbs/" . $album_path . "/th_" . $row['name']; ?>"/>
</a>
</td>
<td><?php echo $row['alt']; ?></b>
</td>
<td width="5%">
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/edit_image.php?id=<?php echo $row['id']; ?>&album_id=<?php echo $album_id; ?>')">
Edit</a>
</td>
</td>
<td width="5%">
<a href="#" onClick="changeMainContentWithConfirmation('http://<?php echo $hostname . $context; ?>/admin/delete_image.php?id=<?php echo $row['id']; ?>', 'Are you sure you want to delete this image: <?php echo $row['name']; ?>')">
Delete
</a>
</td>
</tr>
<?php } ?>
<?php if (mysql_num_rows($image_list) == 0) echo "<tr><td colspan=2>This album is empty!</td></tr>"; ?>
<tr><td colspan=7>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/edit_image.php?id=<?php echo "0"; ?>&album_id=<?php echo $album_id; ?>')">
Add image
</a>
</td></tr>
</table>
