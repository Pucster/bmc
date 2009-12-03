<html>
	<head>
		<title>FCKeditor - Sample</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="noindex, nofollow">
		<link href="../sample.css" rel="stylesheet" type="text/css" />
	</head>
<body>	
<?php
	include("../fckeditor/fckeditor.php") ;
	include("../config.php");

	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	if ($_GET['id'] != '0') {
		$news_id = $_GET['id'];
		$result = mysql_query("SELECT * FROM news WHERE id=" . $news_id);
		$news = mysql_fetch_array($result);

		$news_title = $news['title'];
		$news_content = $news['content'];
	} else {
		$news_id = '0';
		$news_title = '';
		$news_content = '';
?>	
	<form action="add_news.php" method="post">
	<input type="text" name="title" value="<?php echo $news_title; ?>">
	<input type="hidden" name="id" value="<?php echo $news_id; ?>">
<?php

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= "/bmc/fckeditor/" ;
$oFCKeditor->Value		= $news_content ;
$oFCKeditor->Height = '500';
$oFCKeditor->Create() ;
?>
			<br>
			<input type="submit" value="Submit">
		</form>	
	
</body></html>