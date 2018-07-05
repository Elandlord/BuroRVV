<?php


echo "<div class='hoofdvenster'>\n";

SelectForm();

function SelectForm()
{
$toegevoegd = $_GET["toegevoegd"];

$post_naam = $_SESSION['ses_naam'];
$post_email = $_SESSION['ses_email'];
$post_tel = $_SESSION['ses_tel'];
$post_vraag = $_SESSION['ses_vraag'];

	if($toegevoegd =="J")
	{

	require "../defaults/defaults.php";

    echo "<BR><BR><center>\n";
	echo "<TABLE border='1' WIDTH='600'>\n";

	echo "<TR>\n";
	echo "<TD CLASS='geen_tussen_randen3'height='40'>\n";
	echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Dank u wel \"$websitetitle\" zal zo spoedig mogelijk reageren.</FONT></TD>\n";
	echo "</TR>\n";

	echo "<TR>\n";
	echo "<TD CLASS='geen_tussen_randen3' height='330' valign='center' align='center'>\n";
	echo "<IMG src='thankx.gif'>\n";
	echo "</TD>\n";
	echo "</TR>\n";

	echo "</TABLE>\n";
	
	}else{
		if (!isSet($_POST["insturen"]))
		{
		formfields_top();
		formfields_naam($post_naam);
		formfields_email($post_email);
		formfields_tel($post_tel);
		formfields_vraag($post_vraag);
		formfields_end();
		}else{
		HandleForm(); // controleer de ingevoerde waarde's op juiste invoer
		}
	}
}

function formfields_top()
{
echo "<form action='".$_SERVER['PHP_SELF']."' method='post'>\n";
echo "<BR><BR><center>\n";
echo "<TABLE border='1' WIDTH='600'>\n";
}

function formfields_naam($post_naam)
{
echo "<TR>\n";
echo "<TD WIDTH='150' height='40' >\n";
echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Uw naam</FONT></TD>\n";
echo "<TD CLASS='geen_tussen_randen3'WIDTH='450' height='40'>\n";
echo "&nbsp;<INPUT NAME='naam' TYPE='text' SIZE='45' value='$post_naam'></TD>\n";
echo "</TR>\n";
}

function formfields_naam_fout($post_naam)
{
echo "<TR>\n";
echo "<TD WIDTH='150' height='40' >\n";
echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Uw naam</FONT></TD>\n";
echo "<TD BGCOLOR='#ff0000' CLASS='geen_tussen_randen3'WIDTH='450' height='40'>\n";
echo "&nbsp;<INPUT NAME='naam' TYPE='text' SIZE='45' value='$post_naam'>\n";
echo "<FONT COLOR='FFFFFF' SIZE='-1' FACE='Arial'>Minimaal 2 tekens</font></TD>\n";
echo "</TR>\n";
}

function formfields_email($post_email)
{
echo "<TR>\n";
echo "<TD WIDTH='150' height='40'>\n";
echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Uw emailadres</FONT></TD>\n";
echo "<TD CLASS='geen_tussen_randen3'WIDTH='450' height='40'>\n";
echo "&nbsp;<INPUT NAME='email' TYPE='text' SIZE='45' value='$post_email'></TD>\n";
echo "</TR>\n";
}

function formfields_email_fout($post_email)
{
echo "<TR>\n";
echo "<TD WIDTH='150' height='40'>\n";
echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Uw emailadres</FONT></TD>\n";
echo "<TD BGCOLOR='#ff0000' CLASS='geen_tussen_randen3'WIDTH='450' height='40'>\n";
echo "&nbsp;<INPUT NAME='email' TYPE='text' SIZE='45' value='$post_email'>\n";
echo "<FONT COLOR='FFFFFF' SIZE='-1' FACE='Arial'>Onjuist emailadres?</font></TD>\n";
echo "</TR>\n";
}

function formfields_tel($post_tel)
{
echo "<TR>\n";
echo "<TD WIDTH='150' height='40'>\n";
echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Uw telefoonnummer</FONT></TD>\n";
echo "<TD CLASS='geen_tussen_randen3'WIDTH='450' height='40'>\n";
echo "&nbsp;<INPUT NAME='tel' TYPE='text' SIZE='45' value='$post_tel'></TD>\n";
echo "</TR>\n";
}

function formfields_vraag($post_vraag)
{
echo "<TR>\n";
echo "<TD valign='top' WIDTH='150' height='110'>\n";
echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Uw vraag</FONT></TD>\n";
echo "<TD WIDTH='450' height='250'>\n";
echo "&nbsp;<TEXTAREA NAME='vraag' ROWS='14' COLS='50'>$post_vraag</TEXTAREA></TD>\n";
echo "</TR>\n";
}

function formfields_vraag_fout($post_vraag)
{
echo "<TR>\n";
echo "<TD valign='top' WIDTH='150' height='110'>\n";
echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Uw vraag</FONT></TD>\n";
echo "<TD BGCOLOR='#ff0000' WIDTH='450' height='250'>\n";
echo "&nbsp;<TEXTAREA NAME='vraag' ROWS='13' COLS='50'>$post_vraag</TEXTAREA><BR>\n";
echo "&nbsp;<FONT COLOR='FFFFFF' SIZE='-1' FACE='Arial'>Je vraag is kleiner dan 10 tekens?</font></TD>\n";
echo "</TR>\n";
}

function formfields_end()
{
echo "<TR>\n";
echo "<TD COLSPAN='2' ALIGN='CENTER' valign='center' height='40'>\n";
echo "<INPUT NAME='insturen' TYPE='submit' VALUE='Volgende'>\n";
echo "</TD>\n";
echo "</TR>\n";
echo "</TABLE>\n";
echo "</FORM>\n\n";
}


function HandleForm() // controleer de ingevoerde waarde's op correcte invoer
{

$post_naam = $_POST["naam"];
$post_email = str_replace(' ', '', $_POST["email"]);
$post_tel = $_POST["tel"];
$post_vraag = $_POST["vraag"];

$fout=FALSE;

    // Controleer de naam op correcte invoer
	$naam_fout=FALSE;
	$NaamControle = "^.{2,}";
	// ^	= Begin met
	// .	= Elk Willekeurig teken
	// (3,)	= Minimaal 3 tekens lang
	if (!ereg($NaamControle, $post_naam)) // Controleer de naam op correcte invoer
	{
	$fout=TRUE;
	$naam_fout=TRUE;
	}

    // Controleer het emailadres op correcte invoer
	$email_fout=FALSE;
	$emailControle = "(^[0-9a-zA-Z_\.-]{1,}@([0-9a-zA-Z_\-]{1,}\.)+[0-9a-zA-Z_\-]{2,}$)";
	// ^				= Begint met
	// [0-9a-zA-Z_\.-]	= Alle letterjes plus _, ., & -
	// (1)				= Minimaal 1 teken lang
	// $				= String moet eindigen op
	if (!eregi($emailControle, $post_email)) // Controleer het emailadres op juistheid
	{
	$fout=TRUE;
	$email_fout=TRUE;
	}

	// Controleer de vraag op correcte invoer
	$vraag_fout=FALSE;
	$VraagControle = "^.{10,}";
	// ^	= Begin met
	// .	= Elk Willekeurig teken
	// (3,)	= Minimaal 3 tekens lang
	if (!ereg($VraagControle, $post_vraag)) // Controleer de naam op correcte invoer
	{
	$fout=TRUE;
	$vraag_fout=TRUE;
	}

	if($fout)
	{
	formfields_top();
	echo ($naam_fout?formfields_naam_fout($post_naam):formfields_naam($post_naam));
	echo ($email_fout?formfields_email_fout($post_email):formfields_email($post_email));
	formfields_tel($post_tel);
	echo ($vraag_fout?formfields_vraag_fout($post_vraag):formfields_vraag($post_vraag));
	formfields_end();

	}else{

    echo "<BR><BR><center>\n";
	echo "<TABLE border='1' WIDTH='600'>\n";

	echo "<TR>\n";
	echo "<TD height='80'>\n";
	echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>Beste <B>$post_naam</B>,<BR><br>\n";
	echo "&nbsp;Dank u wel voor de onderstaande vraag, als deze vraag juist is druk dan op \"<B>Akkoord</B>\",<BR>\n";
	echo "&nbsp;klik op \"<B>Wijzigen</B>\" als u deze vraag nog wilt aanpassen.\n";
	echo "</FONT></TD>\n";
	echo "</TR>\n";

	echo "<TR>\n";
	echo "<TD height='40'>\n";
	echo "&nbsp;<FONT SIZE='-1' FACE='Arial'>$post_tel</FONT></TD>\n";
	echo "</TR>\n";


	echo "<TR>\n";
	echo "<TD height='210' valign='center' align='center'>\n";
	
		echo "<TABLE border='0' WIDTH='580'>\n";

		echo "<TR>\n";
		echo "<TD height='240'  valign='center' align='left'>\n";
		echo "<FONT SIZE='-1' FACE='Arial'>\n";
		echo "$post_vraag\n";
		echo "</FONT></TD>\n";
		echo "</TR>\n";

		echo "</TABLE>\n";

	echo "</TD>\n";
	echo "</TR>\n";

	echo "<TR>\n";
	echo "<TD height='40'  valign='center' align='center'>\n";
	echo "<input type='button' value='Akkoord' onClick=\"window.location='mail.php'\">\n";
	echo "&nbsp;\n";
	echo "<input type='button' value='Wijzigen' onClick=\"window.location='web-mail.php?verbeteren=y'\">\n";

	echo "</TR>\n";
	echo "</TABLE>\n";

	}
}

echo "</div>\n";
echo "</center>\n";

?>