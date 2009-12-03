<?php
include ("../config.php");
mysql_connect ($sql_host, $sql_user, $sql_pass);
mysql_select_db ($sql_db);

//if (isset($_POST['delete'])) echo "We pressed delete!";
//if (isset($_POST['hide'])) echo "We pressed hide!";
$members_list = mysql_query("SELECT * FROM members ORDER by name");
?>
<table width="80%" border=1>
<tr><td colspan=7>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/edit_member.php?id=<?php echo "0"; ?>')">
Add member
</a>
</td></tr>
<?php while($row = mysql_fetch_array($members_list)) { ?>
<tr>
<td width="90%">
<?php echo $row['name']; ?>
</td>
<td width="5%">
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/edit_member.php?id=<?php echo $row['id']; ?>')">
Edit</a>
</td>
</td>
<td width="5%">
<a href="#" onClick="changeMainContentWithConfirmation('http://<?php echo $hostname . $context; ?>/admin/delete_member.php?id=<?php echo $row['id']; ?>', 'Are you sure you want to delete this member:<?php echo $row['name']; ?>')">
Delete
</a>
</td>
</tr>
<?php } ?>
<tr><td colspan=7>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/admin/edit_member.php?id=<?php echo "0"; ?>')">
Add member
</a>
</td></tr>
</table>
