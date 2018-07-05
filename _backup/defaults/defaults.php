<?php

$url=getenv("SERVER_ADDR");
if($url=="195.20.9.122")
{
// Online
$server = "localhost";		// My SQL Server
$gebruiker = "burorvv";		// Gebruiker
//$password = "y4TpKhq3";		// Wachtwoord (Oud)
$password = "buroRrv12";		// Wachtwoord (Nieuw)
$database = "burorvv";		// Database

// Webadres. wordt met name gebruikt voor het JAVA-Menu
$path="http://www.burorvv.nl/";

// Plaatjes voor de FCKeditor CHMOD 0777
// Origneel bestand ../fckeditor/editor/filemanager/connectors/php/config.php
$Config['UserFilesPath'] = 'http://www.burorvv.nl/fckimages/' ;
$Config['UserFilesAbsolutePath'] = '/www/htdocs/burorvv/fckimages/' ;

}else{

// Testomgeving
$server = "localhost";		// My SQL Server
$gebruiker = "burorvv";		// Gebruiker
$password = "beheerrvv";	// Wachtwoord
$database = "burorvv";		// Database

// Webadres. wordt met name gebruikt voor het JAVA-Menu
$path="http://192.168.123.104/~ws/burorvv";

// Plaatjes voor de FCKeditor CHMOD 0777
// Origneel bestand ../fckeditor/editor/filemanager/connectors/php/config.php
$Config['UserFilesPath'] = 'http://192.168.123.104/~ws/burorvv/fckimages/' ;
$Config['UserFilesAbsolutePath'] = '/home/ws/public_html/burorvv/fckimages/' ;

}



//
//De onderstaande gegevens zijn server onafhankelijk.
//

// Achtergrond 950px X 550px / Plaatsen in de map images
$filename = "../images/achtergrond.jpg";

// Websitetitel & titel voor de titelbalk
$websitetitle = "BURO RIJ & VERKEERSVEILIGHEID";

// Bewegend logo / Logo images in de map images
//180px x 180px
$slide01 = "../images/burorvv_0.gif";
$slide02 = "../images/burorvv_1.gif";
$slide03 = "../images/burorvv_2.gif";
$slide04 = "../images/burorvv_3.gif";
$slide05 = "../images/burorvv_4.gif";


?>