<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$news_list = mysql_query("SELECT * FROM news WHERE id=" . $_GET['id']);
	$news = mysql_fetch_array($news_list);
?>

<table height=600 cellpadding=5>

<tr><td align="left">
<?php echo $news['post_date']; ?>
</td></tr>

<tr><td align="left">
<b><?php echo strtoupper($news['title']); ?></b>
</td></tr>

<tr><td>
<?php echo $news['content']; ?>
</td></tr>



<tr><td align="right">
<a href="#" onClick="changeMainContent('<?php echo "http://" . $hostname . $context . "/news.php"; ?>')">Inapoi la stiri!</a>
</td></tr>
</table>