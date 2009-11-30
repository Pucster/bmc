<?php
include ("../header.php");

if (isset($_POST['delete'])) echo "We pressed delete!";
if (isset($_POST['hide'])) echo "We pressed hide!";
$members_list = mysql_query("SELECT * FROM members ORDER by name");
$table_header = "<table width=\"80%\"><th width=\"5%\">Select</th>" . 
	"<th width=\"90%\" align=\"left\">Name</th><th width=\"5%\" align=\"middle\">Hidden</th>";
echo "BMC members list<br>";
echo $table_header;
echo "<form name=\"members_list\" action=\"" . $_SERVER['PHP_SELF'] . "\" method=post>";
while($row = mysql_fetch_array($members_list)) {

	echo "<tr><td width=\"5%\"><input type=\"checkbox\" name=\"" . $row['id'] . 
	"\"/></td><td>" . $row['name'] . "</td><td>" . $row['hidden'] . "</td></tr>";
}
echo "<tr><td colspan=3>";
echo "<input type=\"submit\" name=\"delete\" value=\"Delete\" />&nbsp;";
echo "<input type=\"submit\" name=\"hide\" value=\"Hide\" /></td>";
echo "</form></table>";

include ("../footer.php");

?>