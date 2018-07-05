<?php

require "losse_velden.php";

SelectForm();

function SelectForm()
{
	if(!isSet($_POST["inloggen"]))
	{
	ShowFormStart();
	userid();
	wachtwoord();
	ShowFormEnd();
	}else{
	HandleForm();
	}
}

function HandleForm() // controleer de ingevoerde waarde's op correcte invoer
{
global $userid, $wachtwoord;

$userid = $_POST["userid"];
$wachtwoord = $_POST["wachtwoord"];
$md5userid = md5($userid);
$md5wachtwoord = md5($wachtwoord);

$fout=FALSE;

    // Controleer het userid op correcte invoer
	$userid_fout=FALSE;
	$UseridControle = "^.{6,}";
	// ^	= Begin met
	// .	= Elk Willekeurig teken
	// (3,)	= Minimaal 3 tekens lang
	if (!ereg($UseridControle, $userid)) // Controleer het userid op correcte invoer
	{
	$fout=TRUE;
	$userid_fout=TRUE;
	}else{

	// Start DB-controle voor het userid
	require "../defaults/defaults.php";
	$db = mysql_connect("$server", "$gebruiker", "$password")
	or die ("Fout, kan de databases niet openen");
	mysql_select_db("$database", $db);
	$sql1 = "SELECT * FROM login where bh_userid = '$md5userid'"; 
	$resultaat1 = mysql_query($sql1);									 
	while ($rij1 = mysql_fetch_array($resultaat1))
	{
	$md5_userid = "$rij1[bh_userid]";
	}
	mysql_free_result($resultaat1);	
	mysql_close($db);
	// Einde DB-controle

		if($md5userid!=="$md5_userid") // Controleer het MD5-userid
		{
		$fout=TRUE;
		$userid_fout=TRUE;
		}
	}

	// Controleer het useridwachtwoord op correcte invoer
	$wachtwoord_fout=FALSE;
	$WachtwoordControle = "^.{5,}";
	// ^	= Begin met
	// .	= Elk Willekeurig teken
	// (3,)	= Minimaal 3 tekens lang
	if (!ereg($WachtwoordControle, $wachtwoord)) // Controleer het wachtwoord op correcte invoer
	{
	$fout=TRUE;
	$wachtwoord_fout=TRUE;
	}else{

	// Start DB-controle voor het wachtwoord
	require "../defaults/defaults.php";
	$db = mysql_connect("$server", "$gebruiker", "$password")
	or die ("Fout, kan de databases niet openen");
	mysql_select_db("$database", $db);
	$sql1 = "SELECT * FROM login where bh_ww = '$md5wachtwoord'"; 
	$resultaat1 = mysql_query($sql1);									 
	while ($rij1 = mysql_fetch_array($resultaat1))
	{
	$bh_id = "$rij1[bh_id]";
	$md5_password = "$rij1[bh_ww]";
	}
	mysql_free_result($resultaat1);	
	mysql_close($db);
	// Einde DB-controle

		if($md5wachtwoord!=="$md5_password") // Controleer het MD5-userid
		{
		$fout=TRUE;
		$wachtwoord_fout=TRUE;
		}
	}

	// Wanneer het userid of het wachtwoord fout is laat dan het inlogscherm weer zien.
	if($fout)
	{
	ShowFormStart();
	echo ($userid_fout?userid_fout():userid());
	echo ($wachtwoord_fout?wachtwoord_fout():wachtwoord());
	ShowFormEnd();
	}else{
	
	$db = mysql_connect("$server", "$gebruiker", "$password")
	or die ("Fout, kan de databases niet openen");
	mysql_select_db("$database", $db);

	//$sql1 = "SELECT * FROM cp_login where cp_id = '$cp_id'"; 
	$sql1 = "SELECT * FROM login where bh_id  = '$bh_id'"; 
	$resultaat1 = mysql_query($sql1);									 
	while ($rij1 = mysql_fetch_array($resultaat1))
	{
	$bh_naam = "$rij1[bh_naam]";
	}

	$_SESSION['bh_okay'] = "okay";

	mysql_free_result($resultaat1);	
	mysql_close($db);

	echo "Welkom $bh_naam<br><BR>\n";
	echo "Klik op de knipperende \"<U>Start button</U>\" om het <B><U></U></B>beheerscherm<B><U></U></B> te starten<br>\n";
	echo "<div id='Layer3' style='position:absolute;left:275; top:100;'>\n";
	echo "<A href='../main/main.php?id=1'>\n";
	echo "<IMG SRC='start.gif' WIDTH='200' HEIGHT='200' ALIGN='BOTTOM' BORDER='0' NATURALSIZEFLAG='3'>\n";
	echo "</a>\n";
	echo "</div>\n";
	}
}


?>