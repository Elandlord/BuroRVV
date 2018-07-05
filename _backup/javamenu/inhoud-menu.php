<?php

require "../defaults/defaults.php";

echo "<ul id='verticalmenu' class='glossymenu'>\n";
echo "<li><a href='../index.php' target='_self'>Home</a></li>\n";

//Submenu
echo "<li><a href='#' target='_self'>Kantelsimulator</a></li>\n";
echo "    <ul>\n";
echo "    <li><a href='../dbform/dbform.php?id=3' target='_self'>Auto op z'n dak</a></li>\n";
echo "    <li><a href='../dbform/dbform.php?id=4' target='_self'>Doelstelling</a></li>\n";
echo "    <li><a href='../dbform/dbform.php?id=5' target='_self'>Training</a></li>\n";
echo "    <li><a href='../pdf/kantelsimulator-burorvv.pdf' target='_new'>Flyer</a></li>\n";
echo "    </ul>\n";
echo "</li>\n";

echo "<li><a href='#' target='_self'>Rijsimulator</a></li>\n";
echo "    <ul>\n";
echo "    <li><a href='../dbform/dbform.php?id=8' target='_self'>Test je rijgedrag</a></li>\n";
echo "    <li><a href='../dbform/dbform.php?id=9' target='_self'>Doelstelling</a></li>\n";
echo "    <li><a href='../dbform/dbform.php?id=10' target='_self'>Training</a></li>\n";
echo "    <li><a href='../pdf/rijsimulator-burorvv.pdf' target='_new'>Flyer</a></li>\n";
echo "    </ul>\n";
echo "</li>\n";

echo "<li><a href='#' target='_self'>Drivesimulator</a></li>\n";
echo "    <ul>\n";
echo "    <li><a href='../dbform/dbform.php?id=15' target='_self'>Test je rijgedrag</a></li>\n";
echo "    <li><a href='../dbform/dbform.php?id=16' target='_self'>Doelstelling</a></li>\n";
echo "    <li><a href='../dbform/dbform.php?id=17' target='_self'>Training</a></li>\n";
echo "    <li><a href='../pdf/rijsimulator-burorvv.pdf' target='_new'>Flyer</a></li>\n";
echo "    </ul>\n";
echo "</li>\n";

echo "<li><a href='../dbform/dbform.php?id=11' target='_self'>Rijtest 50+ \"BROEM\"</a></li>\n";
echo "<li><a href='../dbform/dbform.php?id=14' target='_self'>Het Nieuwe Rijden</a></li>\n";
//echo "<li><a href='../dbform/dbform.php?id=12' target='_self'>Cursus auto te water</a></li>\n";
echo "<li><a href='../dbform/dbform.php?id=13' target='_self'>Mobiele slipbaan</a></li>\n";
echo "<li><a href='../dbform/dbform.php?id=6' target='_self'>Referenties</a></li>\n";
echo "<li><a href='../dbform/dbform.php?id=7' target='_self'>Evenementen</a></li>\n";

//Submenu
echo "<li><a href='#' target='_self'>Contact</a></li>\n";
echo "    <ul>\n";
echo "    <li><a href='../formmail/web-mail.php' target='_self'>Webformulier</a></li>\n";
echo "    <li><a href='mailto:info@burorvv.nl?subject=Vraag via website' target='_self'>Via Outlook</a></li>\n";
echo "    <li><a href='../dbform/dbform.php?id=2' target='_self'' target='_self'>Adres</a></li>\n";
echo "    </ul>\n";
echo "</li>\n";


echo "</ul>\n";


?>