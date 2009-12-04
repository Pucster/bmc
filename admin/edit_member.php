<?php
include ("../config.php");
include ("../helpers.php");
mysql_connect ($sql_host, $sql_user, $sql_pass);
mysql_select_db ($sql_db);
if ($_GET['id'] != '0') {
	$member_id = $_GET['id'];
	$result = mysql_query("SELECT * FROM members WHERE id=" . $member_id);
	$member = mysql_fetch_array($result);
	$member_name = $member['name'];
	$member_nickname = $member['nickname'];
	$member_location = $member['location'];
	$member_ride = $member['ride'];
	$member_start_date = $member['start_date'];
	$member_hidden = $member['hidden'];
	$member_image = '';
	$submit_text = 'Save member';
	$pic_info = mysql_fetch_array(mysql_query("SELECT * FROM images WHERE id='" . $member['profile_image'] . "'"));
	$pic_link = "http://" . $hostname . $context . "/" . $pic_info['path'] . "/" . $pic_info['name'];
} else {
	$member_id = '0';
	$member_name = '';
	$member_nickname = '';
	$member_location = '';
	$member_ride = '';
	$member_start_date = '';
	$member_hidden = '';
	$member_image = '';	
	$submit_text = 'Add member';
}
?>

<form action="http://<?php echo $hostname . $context ?>/admin/add_member.php" enctype="multipart/form-data" method="post">
<fieldset>
<legend>Member editor</legend>
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type="hidden" name="id" value="<?php echo $member_id; ?>">
<table width="80%" align="top" valign="top">
<tr><td width="50%" align="right" valign="top">
<label for="name">Name: </label>
<input type="text" name="name" value="<?php echo $member_name; ?>" maxlength="50"/>
</td>
<?php if ($member_id != '0') {?>
<td rowspan=7 align="right"><img src="<?php echo $pic_link; ?>" height="200" width="200"/></td>
<?php } else {?>
<td rowspan=7 align="right">&nbsp;</td>
<?php } ?>
</tr>
<tr><td align="right">
<label for="nickname">Nickname: </label>
<input type="text" name="nickname" value="<?php echo $member_nickname ?>" maxlength="50"/>
</td></tr>
<tr><td align="right">
<label for="location">Location: </label>
<input type="text" name="location" value="<?php echo $member_location ?>" maxlength="50"/>
</td></tr>
<tr><td align="right">
<label for="ride">Ride: </label>
<input type="text" name="ride" value="<?php echo $member_ride ?>" maxlength="50"/>
</td></tr>
<tr><td align="right">
<label for="start_date">Member since: </label>
<input type="text" name="start_date" value="<?php echo $member_start_date ?>" maxlength="50"/>
</td></tr>
<tr><td align="right">
<label for="imgfile">Profile picture: </label>
<input type="file" name="imgfile" value="<?php echo $member_image ?>" />
</td></tr>
<tr><td align="right">
<input type="submit" name="submit" value ="<?php echo $submit_text?>" />
</td></tr>
</table>
Note: Fields marked with a '*' are mandatory!
</fieldset>
</form>