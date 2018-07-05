<?php

session_start();

$bh_okay = $_SESSION['bh_okay'];

if ($bh_okay == 'okay')
{

require "../head/bh_head.php";

echo "<BODY>\n";

require "../logo/logo.php";
require "../titelbalk/titelbalk.php";
require "bh_hoofdvenster.php";
require "../javamenu/bh_menu.php";

echo "</BODY>\n";
echo "</HTML>\n";
}else{

header("Location: ../logout/logout.php"); /* Stuur de browser naar www.site.nl */  

}

?>