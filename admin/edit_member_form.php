<form action="http://localhost:2080/bmc/admin/edit_member.php" enctype="multipart/form-data" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table width="80%" align="center">
<tr>
<td align="right"><b>*Name:</b></td>
<td><input type="text" name="name" value="
<?php
	if (isset($_POST['name'])) echo $_POST['name'];
	if (isset($member['name'])) echo $member['name'];
?>
" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Nickname:</b></td>
<td><input type="text" name="nickname" value="<?php if (isset($_POST['nickname'])) echo $_POST['nickname'] ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Location:</b></td>
<td><input type="text" name="location" value="<?php if (isset($_POST['location'])) echo $_POST['location'] ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Ride:</b></td>
<td><input type="text" name="ride" value="<?php if (isset($_POST['ride'])) echo $_POST['ride'] ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>Member since:</b></td>
<td><input type="text" name="since" value="<?php if (isset($_POST['since'])) echo $_POST['since'] ?>" maxlength="50"/> </td>
</tr>
<tr>
<td align="right"><b>*Image:</b></td>
<td><input type="file" name="imgfile" value="<?php if (isset($_FILES['imgfile']['tmp_name'])) echo $_FILES['imgfile']['tmp_name'] ?>" /> </td>
</tr>
<tr>
<td></td>
<td align="right"><input type="submit" name="submit" value ="Add member" /></td>
</tr>
</table>
Note: Fields marked with a '*' are mandatory!

</form>
