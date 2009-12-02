<table width="80%" align="middle" valign="top" border="0" cellspacing="0" cellpadding="0" style="background-image:url(images/button_background.JPG);">
<?php
	echo "<tr>";
	$menu_items = mysql_query("SELECT * FROM homepage_links order by position");
	while($row = mysql_fetch_array($menu_items))
	{
		echo "<td align=right>";
		echo "<a href=\"#\" onmouseover=\"setOverImg('" . $row['id'] .  "','');\" onmouseout=\"setOutImg('" . 
			$row['id'] .  "','');\" target=\"\" onClick=\"changeMainContent('http://" . $hostname . $context . "/" . $row['link'] . "')\">" . 
			"<img border=0 width=80 src=\"images/" . $row['image'] . "_up.png\" id=\"button" . $row['id'] . "\">"  . "</a>";
		echo "</td>";
	}
	echo "</tr>";
	// $row['link']
?>
</table>
