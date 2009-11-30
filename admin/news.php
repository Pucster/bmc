<?php

	$news_list = mysql_query("SELECT * FROM news");
	echo "<table height=\"50%\"><tr><td>";
	while($row = mysql_fetch_array($news_list)) {
		echo $row['title'] . "<br/>";
	}
	echo "</td></tr></table>";
	}

?>