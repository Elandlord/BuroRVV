<?php
session_start();
//session_destroy(); 

$_SESSION['bh_okay'] = "niet_okay";

//unset($_SESSION['bh_okay']);

header("Location: ../index.php"); /* Stuur de browser naar www.site.nl */  

?>  


