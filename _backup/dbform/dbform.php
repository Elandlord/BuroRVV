<?php


session_start();

if (!isset($_SESSION['resolutie'])) 
{
header("Location: ../resolution/getres_index.php"); 

}else{

//header("Location: ../dbform/dbform.php?id=1"); 

require "../head/head.php"; 

echo "<BODY>\n";

require "dbform-hoofdvenster.php";
require "../logo/logo.php"; 
require "../javamenu/menu.php";
require "../titelbalk/titelbalk.php";

echo "</BODY>\n";
echo "</HTML>\n";

}

?>