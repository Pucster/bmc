<?php
	include ("config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	$news_list = mysql_query("SELECT * FROM news ORDER by post_date desc");
?>

<table height=600 cellpadding=5>

<?php while($row = mysql_fetch_array($news_list)) { ?>

<tr><td align="left">
<?php 
//$result = strptime($row['post_date'], '%Y-%m-%d');
$day = mysql_fetch_array(mysql_query("SELECT DAY('" . $row['post_date'] . "')"));
$month = mysql_fetch_array(mysql_query("SELECT MONTHNAME('" . $row['post_date'] . "')"));
$year = mysql_fetch_array(mysql_query("SELECT YEAR('" . $row['post_date'] . "')"));
echo $day['0'] . " " . $month['0'] . " " . $year['0'];

//echo $result['tm_year'];
//echo $row['post_date'];
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
if ($row['content'] != contentTruncate($row['content'], 300)) 
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