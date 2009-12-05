<?php
include ("../config.php");
include ("../helpers.php");
mysql_connect ($sql_host, $sql_user, $sql_pass);
mysql_select_db ($sql_db);
if ($_GET['id'] != '0') {
	$album_id = $_GET['id'];
	$result = mysql_query("SELECT * FROM albums WHERE id=" . $album_id);
	$album = mysql_fetch_array($result);
	$album_name = $album['name'];
	$album_description = $album['description'];
	$album_image = $album['front_image'];
	$album_path = $album['path'];
	$album_hidden = $album['hidden'];
	$submit_text = 'Save album';
	$pic_info = mysql_fetch_array(mysql_query("SELECT * FROM images WHERE id='" . $album_image . "'"));
	$pic_link = "http://" . $hostname . $context . "/thumbs/" . $album_path . "/th_" . $pic_info['name'];
} else {
	$album_id = '0';
	$album_name = '';
	$album_description = '';
	$album_path = '';
	$album_hidden = '0';
	$album_image = '0';
	$submit_text = 'Add album';
}
?>

<form action="http://<?php echo $hostname . $context ?>/admin/add_album.php" enctype="multipart/form-data" method="post">
<fieldset>
<legend>Album editor</legend>
<input type="hidden" name="id" value="<?php echo $album_id; ?>">
<table width="80%" align="top" valign="top">
<tr><td width="50%" align="right" valign="top">
<label for="name">* Name: </label>
<input type="text" name="name" value="<?php echo $album_name; ?>" maxlength="50"/>
</td>
<?php if ($album_id != '0') {?>
<td rowspan=7 align="right"><img src="<?php echo $pic_link; ?>"/></td>
<?php } else {?>
<td rowspan=7 align="right">&nbsp;</td>
<?php } ?>
</tr>
<tr><td align="right">
<label for="description">Description: </label>
<input type="text" name="description" value="<?php echo $album_description ?>" maxlength="50"/>
</td></tr>
<tr><td align="right">
<label for="path">Path: </label>
<input type="text" name="path" value="<?php echo $album_path ?>" maxlength="50"/>
</td></tr>
<tr><td align="right">
<label for="hidden">Hidden: </label>
<input type="checkbox" name="hidden" value="hidden" <?php if ($album_hidden == 1) echo "checked=\"checked\""; ?>/>
</td></tr>
<tr><td align="right">
<input type="submit" name="submit" value ="<?php echo $submit_text?>" />
</td></tr>
</table>
Note: Fields marked with a '*' are mandatory!<br/>
Note: The album path is the folder where the images will be uploaded. If left empty
</fieldset>
</form>