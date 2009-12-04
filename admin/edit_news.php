<?php
	include("../fckeditor/fckeditor.php") ;
	include("../config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	if ($_GET['id'] != '0') {
		$result = mysql_query("SELECT * FROM news WHERE id=" . $_GET['id']);
		$news = mysql_fetch_array($result);
		$news_id = $_GET['id'];
	} else $news_id = '0';
?>	
	<form action="add_news.php" method="post">
	<fieldset>
		<legend>News editor</legend>
		<label for="title">
			Title:&nbsp;<input type="text" size="50" name="title" value="<?php if ($news_id != 0) echo $news['title']; ?>"/>
		</label>
		
		<input type="hidden" name="id" value="<?php echo $news_id; ?>">
<?php
// Automatically calculates the editor base path based on the _samples directory.
// This is usefull only for these samples. A real application should use something like this:
// $oFCKeditor->BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.
$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= "/bmc/fckeditor/" ;
if ($news_id != 0) $oFCKeditor->Value = $news['content'] ;
$oFCKeditor->Height = '500';
$oFCKeditor->Create() ;
?>
		<input type="submit" value="Submit">
	</fieldset>
</form>	
