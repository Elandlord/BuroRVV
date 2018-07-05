<?php

$id = $_GET[id];

require "../defaults/defaults.php";
$db = mysql_connect("$server", "$gebruiker", "$password")
or die ("Fout, kan de databases niet openen");
mysql_select_db("$database", $db);
$sql1 = "SELECT * FROM fckeditor where fck_id = '$id'"; 
$resultaat1 = mysql_query($sql1);									 
while ($rij1 = mysql_fetch_array($resultaat1))
{
$text = "$rij1[fck_text]";
}
mysql_free_result($resultaat1);	
mysql_close($db);


echo "<div class='hoofdvenster'>\n";

echo "<BODY>\n";

    echo "<center>\n";
	echo "<TABLE border='0' WIDTH='700'>\n";
	echo "<TR>\n";
	echo "<TD height='450' valign='top'>\n";
	echo "<div style='height:450px; overflow:auto;'>\n";
	echo "$text<br>\n";
	echo "</DIV>\n";
	echo "</TD>\n";
	echo "</TR>\n";
	echo "</TABLE>\n";

echo "</body>\n";
echo "</div>\n\n";


?>