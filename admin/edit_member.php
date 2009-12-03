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
} else {
	$member_id = '0';
	$member_name = '';
	$member_nickname = '';
	$member_location = '';
	$member_ride = '';
	$member_start_date = '';
	$member_hidden = '';
	$member_image = '';	
}
?>

<form action="http://<?php echo $hostname . $context ?>/admin/add_member.php" enctype="multipart/form-data" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type="hidden" name="id" value="<?php echo $member_id; ?>">
<table width="80%" align="center">
<tr>
<td align="right"><b>*Name:</b></td>
<td><input type="text" name="name" value="<?php echo $member_name; ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Nickname:</b></td>
<td><input type="text" name="nickname" value="<?php echo $member_nickname ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Location:</b></td>
<td><input type="text" name="location" value="<?php echo $member_location ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Ride:</b></td>
<td><input type="text" name="ride" value="<?php echo $member_ride ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Member since:</b></td>
<td><input type="text" name="start_date" value="<?php echo $member_start_date ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>*Image:</b></td>
<td><input type="file" name="imgfile" value="<?php echo $member_image ?>" /> </td>
</tr>
<tr>
<td></td>
<td align="right"><input type="submit" name="submit" value ="Add member" /></td>
</tr>
</table>
Note: Fields marked with a '*' are mandatory!

</form>