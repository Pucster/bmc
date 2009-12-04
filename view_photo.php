<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$i = 0;
	$pic = mysql_fetch_array(mysql_query("SELECT * FROM images WHERE id='" . $_GET['id'] . "'"));
?>
<table>
<tr>
<a href="#" onClick="changeMainContent('http://<?php echo $hostname . $context; ?>/view_photo.php?id=<?php echo $pic['id'] ?>')">
<td align="left">Previous</td>
<td align="right">Next</td>
</tr>
<tr>
<td colspan=2>
<img width="600" height="480" src="http://<?php echo $hostname . $context . "/" . $pic['path'] . "/" . $pic['name'];?>"/>
</td>
<tr>
<tr>
<td align="left">Previous</td>
<td align="right">Next</td>
</tr>
</table>