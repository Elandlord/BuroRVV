<?php

include("../fckeditor/fckeditor.php") ;

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

echo "<form action='verwerk.php' method='post'>\n";

$sBasePath = '../fckeditor/' ;
$oFCKeditor = new FCKeditor($id) ;
$oFCKeditor->BasePath = $sBasePath ;
$oFCKeditor->ToolbarSet = 'beheer';
$oFCKeditor->Width = 720 ;
$oFCKeditor->Height = 475 ;
$oFCKeditor->Value = $text;
$oFCKeditor->Create() ;

echo "</body>\n";
echo "</div>\n\n";


?>