<?php

session_start();

if (!isset($_SESSION['resolutie'])) 
{
header("Location: ../resolution/bh_getres_index.php"); 

}else{

require "head.php";

echo "<BODY>\n";

require "../beheer/beheer-menu.php";
require "../beheer/hoofdvenster.php";
require "../logo/logo.php";
require "../titelbalk/titelbalk.php";

echo "</BODY>\n";
echo "</HTML>\n";

}
?>