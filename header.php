<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 TrANSItional//EN">
<?php
	include ("config.php");
    mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
?>
    <html>
      <head>
        <title>	Bukowina MotorClub :: <?php echo $_SERVER['PHP_SELF']?>	</title>
		<script src="http://<?php echo $hostname ?>/bmc/menuscript.js" language="javascript" type="text/javascript"></script>
		<script type="text/javascript" src="http://<?php echo $hostname ?>/bmc/js_helper.js" language="javascript"></script>
		<link rel="stylesheet" type="text/css" href="http://<?php echo $hostname ?>/bmc/menustyle.css" media="screen, print" />
		<link rel=StyleSheet href="http://<?php echo $hostname ?>/bmc/bmc.css" type="text/css">
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
<body>

<!-- Start the real header -->
<table width="80%" height="10%" border="0" cellspacing="0" cellpadding="0" align="middle" valign="top">
<tr>
<td width="20%"><img src="images/sigla_BMC.png" height="100"/></td>
<td height="60">
<div align="center"></div></td>
<td width="20%">
<div align="right">cauta</div></td>
</tr>
</table>