<?php

$dir=getenv("SCRIPT_FILENAME");
$urllengte = strlen($dir);
$urllengte2 = $urllengte-9;
$begin = substr($dir, $urllengte2, 9);

echo "<SCRIPT type='text/javascript' src='../slideshow/slideshow.js'></SCRIPT>\n\n";

echo "<SCRIPT type='text/javascript'>\n\n";
echo "<!--\n";
echo "SLIDES = new slideshow('SLIDES');\n";

//include "get_foto_jpg.php";
include "get_foto_gif.php";

echo "//-->\n";
echo "</SCRIPT>\n\n";

?>
