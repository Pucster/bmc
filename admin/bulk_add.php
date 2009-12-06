<?php
include ("../config.php");
include ("../helpers.php");
mysql_connect ($sql_host, $sql_user, $sql_pass);
mysql_select_db ($sql_db);
$submit_text = 'Upload';
$album_id = $_GET['album_id'];
$album_name = mysql_result(mysql_query("SELECT name FROM albums WHERE id='" . $album_id . "'"),0);
?>

<form action="http://<?php echo $hostname . $context ?>/admin/add_zip.php" enctype="multipart/form-data" method="post">
<fieldset>
<legend>Bulk add images</legend>
<b><?php echo "Uploading to " . $album_name; ?></b>
<input type="hidden" name="MAX_FILE_SIZE" value="500000000">
<input type="hidden" name="album_id" value="<?php echo $album_id; ?>">
<table width="80%" align="top" valign="top">
<tr><td align="right">
<label for="zipfile">Upload zip: </label>
<input type="file" name="zipfile" value="" />
</td></tr>
<tr><td align="right">
<input type="submit" name="submit" value ="<?php echo $submit_text?>" />
</td></tr>
</table>
</fieldset>
Note: This will add all the pictures in the .zip you upload to the album
</form>