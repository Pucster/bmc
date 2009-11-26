<table width="50%" border="0" cellspacing="0" cellpadding="0">
<?php
	echo "<tr>";
	$menu_items = mysql_query("SELECT * FROM homepage_links");
	while($row = mysql_fetch_array($menu_items))
	{
		echo "<td>";
		echo "<a href=\"" . $row['link'] . "\" onmouseover=\"setOverImg('" . $row['id'] .  "','');\" onmouseout=\"setOutImg('" . 
			$row['id'] .  "','');\" target=\"\"><img border=0 src=\"images/" . $row['image'] . "_up.png\" id=\"button" . 
			$row['id'] . "\">"  . "</a>";
		echo "</td>";
	}
	echo "</tr>";
?>
</table>
