<table width="80%" height="80%" border="0" cellspacing="0" cellpadding="0" align="middle" valign="middle">
<tr>
<td valign="top" align="center">
<?php include ("menu.php"); ?>
</td></tr>
<tr>
<td align="center">
<?php
$pagename = $_SERVER['PHP_SELF'];

if ( $pagename == "/bmc/meetings.php") {

	echo "<table height=600 width=\"85%\" border=\"0\" cellspacing=\"0\" cellpading=\"0\">";
	echo "<tr><td>2009</td><td>2008</td><td>2007</td><td>2006</td></tr>";
	echo "</table>";
}

if ( $pagename == "/bmc/about.php") {

	echo "<table height=600 width=\"85%\" border=\"0\" cellspacing=\"0\" cellpading=\"0\">";
	echo "<tr><td>";
	echo "Bukowina Motor Club (BMC) a luat fiinta in luna august 2006 si este singurul club moto din Bucovina. A fost fondat in Radauti, de 7 membri iar in momentul de fata numarul acestora depaseste 30. Numele clubului arata in mod simplu locatia si natura acestuia iar \"Bukowina\" a fost ales dupa denumirea originala a acestei zone. Clubul este deschis tuturor celor care se simt cu sufletul in Bucovina, sunt motociclisti (indiferent daca sunt indragostiti de speed, enduro, chopper, old timer, tourer ...), ne impartasesc modul nostru de a fi si il reprezinta intr-o maniera  respectabila. Activitatile pe care ne-am propus sa le facem impreuna sunt diverse si includ plimbari cu motocicletele, achizitionarea de echipamente si motociclete, suport si ajutor in cazul excursiilor, organizarea de evenimente motociclistice publice, petreceri sau o simpla bere impreuna. Insemnele BMC au fost create avand la baza stema originala a Bucovinei. ";
	echo "</tr></td>";
	echo "</table>";
}

if ( $pagename == "/bmc/members.php") {
	$i = 0;
	echo "<br/><br/><br/><br/><br/>";
	echo "<table height=600 width=\"85%\" border=\"0\" cellspacing=\"0\" cellpading=\"0\">";
	// up margin
	echo "<tr heigth=50%><td colspan=6 bgcolor=\"red\"><img height=10 src=\"images/test.png\"/></td></tr>";
	// first row
	$members_list = mysql_query("SELECT * FROM members ORDER by name");
	$number_of_members = mysql_num_rows($members_list);
	$rows = $number_of_members / 4;
	echo "<tr>";
	echo "<td rowspan=" . $rows . " bgcolor=\"red\"></td>";
	while($row = mysql_fetch_array($members_list)) {
		$i = $i + 1;
		echo "<td>";
		$image = mysql_query("SELECT * FROM images where id=" . $row['profile_image']);
		while($row2 = mysql_fetch_array($image)) {
			echo "<img src=\"" . $row2['path'] . "/" . $row2['name'] . "\" height=\"100\" />";
		}
		echo "<br/>";
		#echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpading=\"0\">";
		echo "<b>" . $row['name'] . "</b> a.k.a. <b>" . $row['nickname'] . "</b><br />";
		#echo "Location: " . $row['location'] . "<br />";
		#echo "Ride: " . $row['ride'] . "<br />";
		#echo "Member since: " . $row['start_date'];
		echo "</td>";
		#echo "</table>";
		#echo "</td></tr>";
		if ($i == 4) echo "<td rowspan=" . $rows . " bgcolor=\"red\"></td>";
		if ($i % 4 == 0) echo "</tr><tr>";
	}
	
	echo "</tr>";
	echo "<tr><td colspan=6 bgcolor=\"red\"></td></tr>";
	echo "</table>";
	}
if ( $pagename == "/bmc/index.php") {
	$news_list = mysql_query("SELECT * FROM news");
	echo "<table height=\"50%\"><tr><td>";
	while($row = mysql_fetch_array($news_list)) {
		echo $row['title'] . "<br/>";
	}
	echo "</td></tr></table>";
	}
?>


</td>
</tr>
</table>