<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);

	$result = mysql_query("SELECT * FROM members WHERE id=" . $_GET['id']);
	$member = mysql_fetch_array($result);
	$result = mysql_query("SELECT * FROM images WHERE id=" . $member['profile_image']);
	$image = mysql_fetch_array($result);
?>

<table width="800" height="600" cellpadding=30>

<tr><td>
<a href="#" onClick="changeMainContent('<?php echo "http://" . $hostname . $context . "/members.php"; ?>')">Inapoi la membri!</a>
</td></tr>

<tr>

<td width="300" valign="top">
<img src="<?php echo $image['path'] . "/" . $image['name']?>" width=300></img>
</td>
<td valign="top">
<p><b>Name:</b> <?php echo $member['name'];?></p>
<p>Nickname: <?php echo $member['nickname'];?></p>
<p>In BMC din: <?php echo $member['start_date'];?></p>
<p>Location: <?php echo $member['location'];?></p>
<p>Ride: <?php echo $member['ride'];?></p>
</td>
</tr>
</table>