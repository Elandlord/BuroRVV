<?php

require "../defaults/defaults.php";

echo "<ul id='verticalmenu' class='glossymenu'>\n";
echo "    <li><a href='../main/main.php?id=1' target='_self'>Home</a></li>\n";

//Submenu
echo "<li><a href='#' target='_self'>Kantelsimulator</a></li>\n";
echo "    <ul>\n";
echo "    <li><a href='../main/main.php?id=3' target='_self'>Auto op z'n dak</a></li>\n";
echo "    <li><a href='../main/main.php?id=4' target='_self'>Doelstelling</a></li>\n";
echo "    <li><a href='../main/main.php?id=5' target='_self'>Training</a></li>\n";
echo "    </ul>\n";
echo "</li>\n";

echo "<li><a href='#' target='_self'>Rijsimulator</a></li>\n";
echo "    <ul>\n";
echo "    <li><a href='../main/main.php?id=8' target='_self'>Test je rijgedrag</a></li>\n";
echo "    <li><a href='../main/main.php?id=9' target='_self'>Doelstelling</a></li>\n";
echo "    <li><a href='../main/main.php?id=10' target='_self'>Training</a></li>\n";
echo "    </ul>\n";
echo "</li>\n";

echo "<li><a href='#' target='_self'>Drivesimulator</a></li>\n";
echo "    <ul>\n";
echo "    <li><a href='../main/main.php?id=15' target='_self'>Test je rijgedrag</a></li>\n";
echo "    <li><a href='../main/main.php?id=16' target='_self'>Doelstelling</a></li>\n";
echo "    <li><a href='../main/main.php?id=17' target='_self'>Training</a></li>\n";
echo "    </ul>\n";
echo "</li>\n";

echo "<li><a href='../main/main.php?id=11' target='_self'>Rijtest 50+ \"BROEM\"</a></li>\n";
echo "<li><a href='../main/main.php?id=14' target='_self'>Het Nieuwe Rijden</a></li>\n";
//echo "<li><a href='../main/main.php?id=12' target='_self'>Cursus auto te water</a></li>\n";
echo "<li><a href='../main/main.php?id=13' target='_self'>Mobiele slipbaan</a></li>\n";
echo "<li><a href='../main/main.php?id=6' target='_self'>Referenties</a></li>\n";
echo "<li><a href='../main/main.php?id=7' target='_self'>Evenementen</a></li>\n";

//Submenu
echo "<li><a href='#' target='_top'>Contact</a></li>\n";
echo "    <ul>\n";
echo "    <li><a href='../main/main.php?id=2' target='_self' target='_self'>Adres</a></li>\n";
echo "    </ul>\n";
echo "</li>\n";

echo "<li><a href='#' target='_self'>Websitebeheer</a></li>\n";
echo "    <ul>\n";
echo "    <li><a href='http://www.burorvv.nl/_bron/phpinfo.php' target='_new'>PHP info</a></li>\n";
echo "    <li><a href='http://www.burorvv.nl/mysqladmin/' target='_new'>PhpMyadmin</a></li>\n";
echo "    <li><a href='http://www.eatserver.nl' target='_new'>Domeinbeheer</a></li>\n";
echo "    <li><a href='http://msc.deheeg.nl' target='_new'>Administratie</a></li>\n";
echo "    <li><a href='http://www.burorvv.nl/usage/' target='_new'>Statistieken</a></li>\n";
echo "    </ul>\n";
echo "</li>\n";


echo "<li><a href='../beheer/logout.php' target='_self'>Uitloggen</a></li>\n";


echo "</ul>\n";


?>