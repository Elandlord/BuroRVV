<?php

session_start();

$verbeteren = $_GET["verbeteren"];

	if ($verbeteren != "y")
	{
	$post_naam = $_POST["naam"];
	$post_email = $_POST["email"];
	$post_tel = $_POST["tel"];
	$post_vraag = $_POST["vraag"];

	$_SESSION['ses_naam'] = $post_naam;
	$_SESSION['ses_email'] = $post_email;
	$_SESSION['ses_tel'] = $post_tel;
	$_SESSION['ses_vraag'] = $post_vraag;
	} 


require "../head/head.php"; 

echo "<BODY>\n";

require "../formmail/web-mail-hoofdvenster.php";
require "../logo/logo.php"; 
require "../javamenu/menu.php";
require "../titelbalk/titelbalk.php";

echo "</BODY>\n";
echo "</HTML>\n";

?>