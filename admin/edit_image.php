<?php
include ("../config.php");
include ("../helpers.php");
mysql_connect ($sql_host, $sql_user, $sql_pass);
mysql_select_db ($sql_db);
if ($_GET['id'] != '0') {
	$image_id = $_GET['id'];
	$result = mysql_query("SELECT * FROM images WHERE id=" . $image_id);
	$image = mysql_fetch_array($result);
	$image_name = $image['name'];
	$image_alt = $image['alt'];
	$submit_text = 'Save image';
	$result = mysql_query("SELECT path,front_image FROM albums WHERE id='" . $_GET['album_id']. "'");
	$album_path = mysql_result($result,0,0);
	$front_pic_id = mysql_result($result,0,1);
	$image_link = "http://" . $hostname . $context . "/thumbs/" . $album_path . "/th_" . $image['name'];
} else {
	$image_id = '0';
	$image_name = '';
	$image_alt = '';
	$submit_text = 'Add image';
}
$album_id = $_GET['album_id'];
?>

<form action="http://<?php echo $hostname . $context ?>/admin/add_image.php" enctype="multipart/form-data" method="post">
<fieldset>
<legend>Image editor</legend>
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type="hidden" name="id" value="<?php echo $image_id; ?>">
<input type="hidden" name="album_id" value="<?php echo $album_id; ?>">
<table width="80%" align="top" valign="top">
<tr><td width="50%" align="right" valign="top">
<?php if ($image_id != '0') {?>
<td rowspan=7 align="right"><img src="<?php echo $image_link; ?>"/></td>
<?php } else {?>
<td rowspan=7 align="right">&nbsp;</td>
<?php } ?>
</tr>
<tr><td align="right">
<label for="alt">Description: </label>
<input type="text" name="alt" value="<?php echo $image_alt ?>" maxlength="50"/>
</td></tr>
<tr><td align="right">
<label for="frontImage">Front image: </label>
<input type="checkbox" name="frontImage" value="frontImage" <?php if ($image_id == $front_pic_id) echo "checked=\"checked\""; ?>/>
</td></tr>
<?php if ($image_id == '0') {?>
<tr><td align="right">
<label for="imgfile">Image: </label>
<input type="file" name="imgfile" value="<?php echo $image_name ?>" />
</td></tr>
<?php }?>
<tr><td align="right">
<input type="submit" name="submit" value ="<?php echo $submit_text?>" />
</td></tr>
</table>
Note: Fields marked with a '*' are mandatory!
</fieldset>
</form>