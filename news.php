<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$news_list = mysql_query("SELECT * FROM news ORDER by post_date");
?>

<table height=600 cellpadding=5>

<?php while($row = mysql_fetch_array($news_list)) { ?>

<tr><td align="left">
<?php 
echo $row['post_date'];
?>
</td></tr>
<tr><td>
<b><?php echo strtoupper($row['title']); ?></b>
</td></tr>
<tr><td>
<?php echo contentTruncate($row['content'], 300); ?>
</td></tr>
<tr><td>
<?php
echo "<a href=\"#\" onClick=\"changeMainContent('http://" . $hostname . $context . "/news_display.php?id=" . $row['id'] . "')\">Citeste toata stirea</a>";
?>
</td></tr>

<?php } ?>

</table>
	

<?php

function contentTruncate($string, $limit, $break=".", $pad=" ...")
{ // return with no change if string is shorter than $limit
	if(strlen($string) <= $limit) return $string;
// is $break present between $limit and the end of the string? 
	if(false !== ($breakpoint = strpos($string, $break, $limit))) {
		if($breakpoint < strlen($string) - 1) {
			$string = substr($string, 0, $breakpoint) . $pad; 
		} 
	} 
	return $string;
}

?>