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
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Tabs Example</title>
    <link rel="stylesheet" type="text/css" href="../ext/resources/css/ext-all.css" />
    <link rel="stylesheet" type="text/css" href="tabs-example.css" />
    <script type="text/javascript" src="../ext/adapter/ext/ext-base.js"></script>
    <script type="text/javascript" src="../ext/ext-all.js"></script>
    <script type="text/javascript" src="tabs-example.js"></script>

    <link rel="stylesheet" type="text/css" href="tabs-example.css" />

    <!-- Common Styles for the examples -->
    <link rel="stylesheet" type="text/css" href="/ext/shared/examples.css" />    

</head>
<body class='admin'>
<script type="text/javascript" src="../ext/shared/examples.js"></script><!-- EXAMPLES -->
<?php
    $user_id = $_SESSION['user_id'];
    $result = mysql_query("SELECT * FROM users where id=" . $user_id);
    $user = mysql_fetch_array($result);
?>	
<?php if ($user['is_admin'] == '1') {?>
    <?php } ?>
<html>
    <body>
        <table width="800" align="center" border="1">
            <tr>
                <th height="1%" align="left" colspan=6>Welcome, <?php echo $user['realname']; ?><br/></th>
                <th align="right" width="20%"><a href="logout.inc.php">Log Out</a></th>
            </tr>
            <tr><td><div id="here"></div></td></tr>
        </table>
        <table width="800" align="center">
            <tr>
            <td valign=top>
                <div id="mainContent">This is the admin work area!</div>
            </td>
        </table>
    </body>
</html>