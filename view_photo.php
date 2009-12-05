<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$i = 0;
	//$pic = mysql_fetch_array(mysql_query("SELECT * FROM images WHERE id='" . $_GET['id'] . "'"));
?>
<img width="600" height="480" src="http://<?php echo $hostname . $context . "/" . $_GET['path'];?>"/>
