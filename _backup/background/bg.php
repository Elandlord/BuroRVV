<?php

require "../defaults/defaults.php";

$w=$_GET['w'];
$h=isset($_GET['h'])?$_GET['h']:$w;
$x=isset($_GET['x'])?$_GET['x']:0;
$y=isset($_GET['y'])?$_GET['y']:0;
header('Content-type: image/jpg');
header('Content-Disposition: attachment; filename='.$src);
$image = imagecreatefromjpeg($filename); 
$crop = imagecreatetruecolor($w,$h);
imagecopy ( $crop, $image, 0, 0, $x, $y, $w, $h );
imagejpeg($crop);

?>