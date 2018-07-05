<?php

// Bepaal een willekeurig getal tussen 0 en 15 en selecteer
// hierbij de juiste overgang

mt_srand((double)microtime()*1000000);
$trans = mt_rand(1,15);

switch($trans)
{
case "1";
echo "s.filter = \"progid:DXImageTransform.Microsoft.barn()\";\n";
break;

case "2";
echo "s.filter = \"progid:DXImageTransform.Microsoft.blinds()\";\n";
break;

case "3";
echo "s.filter = \"progid:DXImageTransform.Microsoft.CheckerBoard()\";\n";
break;

case "4";
echo "s.filter = \"progid:DXImageTransform.Microsoft.GradientWipe()\";\n";
break;
	
case "5";
echo "s.filter = \"progid:DXImageTransform.Microsoft.Inset()\";\n";
break;
	
case "6";
echo "s.filter = \"progid:DXImageTransform.Microsoft.Iris()\";\n";
break;

case "7";
echo "s.filter = \"progid:DXImageTransform.Microsoft.Pixelate()\";\n";
break;

case "8";
echo "s.filter = \"progid:DXImageTransform.Microsoft.RadialWipe()\";\n";
break;

case "9";
echo "s.filter = \"progid:DXImageTransform.Microsoft.RandomBars()\";\n";
break;

//case "10";
//echo "s.filter = \"progid:DXImageTransform.Microsoft.Slide()\";\n";
//break;

case "11";
echo "s.filter = \"progid:DXImageTransform.Microsoft.Spiral()\";\n";
break;

//case "12";
//echo "s.filter = \"progid:DXImageTransform.Microsoft.Stretch()\";\n";
//break;

//case "13";
//echo "s.filter = \"progid:DXImageTransform.Microsoft.Strips()\";\n";
//break;

case "14";
echo "s.filter = \"progid:DXImageTransform.Microsoft.Wheel()\";\n";
break;

case "15";
echo "s.filter = \"progid:DXImageTransform.Microsoft.ZigZag()\";\n";
break;

default;
echo "s.filter = \"progid:DXImageTransform.Microsoft.fade()\";\n";
}

?>
