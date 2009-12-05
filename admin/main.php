<?php
	include ("../config.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	
?>
<?php
// Start session
session_start();
 
// Include required functions file
require_once('../helpers.php');
 
// Check login status... if not logged in, redirect to login screen
if (check_login_status() == false) {
	redirect('login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
	<title>	Bukowina MotorClub :: Admin	</title>
	<script type="text/javascript" src="http://<?php echo $hostname ?>/bmc/js_helper.js" language="javascript"></script>
	<link rel=StyleSheet href="http://<?php echo $hostname ?>/bmc/bmc.css" type="text/css">
</head>
<body class='admin'>

<?php
$user_id = $_SESSION['user_id'];
$result = mysql_query("SELECT * FROM users where id=" . $user_id);
$user = mysql_fetch_array($result);
?>	
	<p>BMC admin area</p>
<?php if ($user['is_admin'] == '1') {?>
<?php } ?>
<html>
<body>

<table height="600" width="80%" align="center" border="1">
<tr>
<th height="1%" align="left" colspan=6>Welcome, <?php echo $user['realname']; ?><br/></th>
<th align="right" width="10%"><a href="logout.inc.php">Log Out</a></th>
</tr>

<tr>
<td height="1%" >
<a href="#" onClick="changeMainContent('<?php echo adminLink('users');?>')">Users</a>
</td>
<td>
<a href="#" onClick="changeMainContent('<?php echo adminLink('members');?>')">Members</a>
</td>
<td>
<a href="#" onClick="changeMainContent('<?php echo adminLink('albums');?>')">Albums</a>
</td>
<td>
<a href="#" onClick="changeMainContent('<?php echo adminLink('images');?>')">Images</a>
</td>
<td>
<a href="#" onClick="changeMainContent('<?php echo adminLink('news');?>')">News</a>
</td>
<td>
<a href="#" onClick="changeMainContent('<?php echo adminLink('meetings');?>')">Meetings</a>
</td>
<td>
<a href="#" onClick="changeMainContent('<?php echo adminLink('various');?>')">Various</a>
</td>
</tr>
<tr>
<td colspan=7>
<div id="mainContent">This is the admin work area!</div>
</td>
</table>

</body>
</html>