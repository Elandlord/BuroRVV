<?php

session_start();


// Is de resolutie bekend is stop dan de waarde in een sessie.
if (isset($_GET['width']))
{

$_SESSION['resolutie'] = $_GET['width'];
header("Location: ../dbform/dbform.php?id=1"); 

}else{

// Indien de screen resolutie nog niet bekend is,
// gebruik dan dit kleine Javascriptje.
require "../resolution/getres.php";

}




?>

