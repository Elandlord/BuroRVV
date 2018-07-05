<?php


if (isset($_POST))
{
$postArray = &$_POST;			// 4.1.0 or later, use $_POST
}else{
$postArray = &$HTTP_POST_VARS;	// prior to 4.1.0, use HTTP_POST_VARS
}


foreach ($postArray as $sForm => $value)
{
	if (get_magic_quotes_gpc())
	{
	$postedValue = htmlspecialchars(stripslashes($value));
	}else{
	$postedValue = htmlspecialchars($value);
	}
}

// echo "1. $sForm<br>\n";
// echo "2. $value<br>\n";


require "../defaults/defaults.php";
$db = mysql_connect("$server", "$gebruiker", "$password")
or die ("Fout, kan de databases niet openen");
mysql_select_db("$database", $db);

$sql = "UPDATE fckeditor SET
		fck_text = '$value'
		where $sForm = fck_id";

$resultaat = mysql_query($sql);
//mysql_free_result($resultaat1);	
mysql_close($db);


header("Location: ../main/main.php?id=$sForm"); /* Stuur de browser naar www.site.nl */  




?>