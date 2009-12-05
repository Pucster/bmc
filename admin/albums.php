<?php
include ("../config.php");
mysql_connect ($sql_host, $sql_user, $sql_pass);
mysql_select_db ($sql_db);

$albums_list = mysql_query("SELECT * FROM albums ORDER by name");
?>
<table width="80%" border=1>
<tr><td colspan=7>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/edit_album.php?id=<?php echo "0"; ?>')">
Add album
</a>
</td></tr>
<?php while($row = mysql_fetch_array($albums_list)) { ?>
<tr>
<td width="90%">
<?php echo $row['name']; ?>
</td>
<td width="5%">
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/edit_album.php?id=<?php echo $row['id']; ?>')">
Edit</a>
</td>
</td>
<td width="5%">
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/add_images.php?id=<?php echo $row['id']; ?>')">
Add images</a>
</td>
<td width="5%">
<a href="#" onClick="changeMainContentWithConfirmation('http://<?php echo $hostname . $context; ?>/admin/delete_album.php?id=<?php echo $row['id']; ?>', 'Are you sure you want to delete this album: <?php echo $row['name']; ?>')">
Delete
</a>
</td>
</tr>
<?php } ?>
<tr><td colspan=7>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/edit_album.php?id=<?php echo "0"; ?>')">
Add album
</a>
</td></tr>
</table>
