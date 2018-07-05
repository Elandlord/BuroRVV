<?php

session_start();

$screen_width = $_SESSION['resolutie'];


$vanaf_links = ($screen_width/2)-490;


if ($vanaf_links <0)
{
$vanaf_links = 0;
}

$left_1 = ($vanaf_links."px");
$left_2 = (205+$vanaf_links."px");

echo "<style TYPE='text/css'>\n";

/*
Image grootte 950 x 550 px
x = beginpunt - vanaf links
y = beginpunt - naar beneden
w = breedte 
h = hoogte
*/

echo "BODY {background-color: #f2e6ff;\n"; 
echo "	    background-repeat: no-repeat;\n";
echo "		font-family: Arial;\n";
echo "	    font-size: 12px;\n";
echo "	    font-style: normal;\n";
echo "	    text-align: center;\n";
echo "	    }\n\n";


echo ".logo{\n";
echo "position: absolute;\n";
echo "top: 10px;\n";
echo "left: $left_1;\n";
echo "width: 200px;\n";
echo "height: 200px;\n";
echo "color: black;\n";
echo "margin: 10px 10px 10px 10px;\n";
echo "padding: 10px 10px 10px 10px;\n";
echo "background: white;\n";
echo "background-image: url(../background/bg.php?x=0&y=0&w=200&h=200);\n";
echo "}\n\n";


echo ".titelbalk{\n";
echo "position: absolute;\n";
echo "top: 10px;\n";
echo "left: $left_2;\n";
echo "width: 750px;\n";
echo "height: 50px;\n";
echo "color: #01017E;\n";
echo "margin: 10px 10px 10px 10px;\n";
echo "padding: 10px 10px 10px 10px;\n";
echo "font-family: Courier New CYR;\n";
echo "font-size: 28px;\n";
echo "letter-spacing: +3px;\n";
echo "font-weight: bolder;\n";
echo "text-decoration: none;\n";
echo "text-align: center;\n";
echo "background: white;\n";
echo "background-image: url(../background/bg.php?x=200&y=0&w=750&h=50);\n";
echo "}\n\n";


echo ".hoofdvenster{\n";
echo "position: absolute;\n";
echo "top: 65px;\n";
echo "left: $left_2;\n";
echo "width: 750px;\n";
echo "height: 500px;\n";
echo "margin: 10px 10px 10px 10px;\n";
echo "padding: 10px 10px 10px 10px;\n";
echo "text-align: left;\n";
echo "background: white;\n";
echo "background-image: url(../background/bg.php?x=200&y=50&w=750&h=500);\n";
echo "}\n\n";

echo ".menu{\n";
echo "position: absolute;\n";
echo "top: 215px;\n";
echo "left: $left_1;\n";
echo "width: 200px;\n";
echo "height: 350px;\n";
echo "color: black;\n";
echo "margin: 10px 10px 10px 10px;\n";
echo "padding: 10px 10px 10px 10px;\n";
echo "background: white;\n";
echo "background-image: url(../background/bg.php?x=0&y=200&w=200&h=350);\n";
echo "}\n\n";

echo "</style>\n\n";


?>