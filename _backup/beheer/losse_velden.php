<?php

function ShowFormStart()
{
echo "<BR><BR><BR><BR><BR><BR><BR><BR>\n";

echo "<form action='".$_SERVER['PHP_SELF']."' method='post'>\n";
echo "<TABLE WIDTH='400'>\n";
//echo "<TR>\n";
//echo "<TD COLSPAN='2' ALIGN='CENTER' valign='center' height='40'>\n";
//echo "<FONT SIZE='-1' FACE='Arial'><b>Inloggen</b></FONT></TD>\n";
//echo "</TR>\n";
}

function ShowFormEnd()
{
echo "<TR>\n";
echo "<TD COLSPAN='2' ALIGN='CENTER' valign='center' height='40'>\n";
echo "<INPUT NAME='inloggen' TYPE='submit' VALUE='Inloggen in het beheerscherm'>\n";
echo "</TD>\n";
echo "</TR>\n";
echo "</TABLE>\n";
echo "</FORM>\n\n";
}

function userid($userid="")
{
$userid = $_POST["userid"];
global $userid;
echo "<TR>\n";
echo "<TD WIDTH='50%' height='40'>\n";
echo "<FONT SIZE='-1' FACE='Arial'>&nbsp;User-ID</FONT></TD>\n";
echo "<TD WIDTH='50%' height='40' align='center'>\n";
echo "&nbsp;<INPUT NAME='userid' TYPE='text' SIZE='15' value='$userid'></TD>\n";
echo "</TR>\n";
}

function userid_fout($userid="")
{
$userid = $_POST["userid"];
global $userid;
echo "<TR>\n";
echo "<TD WIDTH='50%' height='40'>\n";
echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>User-ID</FONT></TD>\n";
echo "<TD BGCOLOR='#ff0000' WIDTH='50%' height='40' align='center'>\n";
echo "&nbsp;<INPUT NAME='userid' TYPE='text' SIZE='15' value='$userid'></TD>\n";
echo "</TR>\n";
}

function wachtwoord($wachtwoord="")
{
$wachtwoord = $_POST["wachtwoord"];
global $wachtwoord;
echo "<TR>\n";
echo "<TD WIDTH='50%' height='40'>\n";
echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Wachtwoord</FONT></TD>\n";
echo "<TD WIDTH='50%' height='40' align='center'>\n";
echo "&nbsp;<INPUT NAME='wachtwoord' TYPE='password' SIZE='15' value='$wachtwoord'></TD>\n";
echo "</TR>\n";
}

function wachtwoord_fout($wachtwoord="")
{
$wachtwoord = $_POST["wachtwoord"];
global $wachtwoord;
echo "<TR>\n";
echo "<TD WIDTH='50%' height='40'>\n";
echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Wachtwoord</FONT></TD>\n";
echo "<TD BGCOLOR='#ff0000' WIDTH='50%' height='40' align='center'>\n";
echo "&nbsp;<INPUT NAME='wachtwoord' TYPE='password' SIZE='15' value='$wachtwoord'></TD>\n";
echo "</TR>\n";
}

?>