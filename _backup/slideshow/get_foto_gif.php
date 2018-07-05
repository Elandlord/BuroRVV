<?php

require "../defaults/defaults.php";

echo "s = new slide();\n";
echo "s.src = \"$slide01\";\n";
require "transform.php";
echo "SLIDES.add_slide(s);\n\n";

echo "s = new slide();\n";
echo "s.src = \"$slide02\";\n";
require "transform.php";
echo "SLIDES.add_slide(s);\n\n";

echo "s = new slide();\n";
echo "s.src = \"$slide03\";\n";
require "transform.php";
echo "SLIDES.add_slide(s);\n\n";

echo "s = new slide();\n";
echo "s.src = \"$slide04\";\n";
require "transform.php";
echo "SLIDES.add_slide(s);\n\n";

echo "s = new slide();\n";
echo "s.src = \"$slide05\";\n";
require "transform.php";
echo "SLIDES.add_slide(s);\n\n";

?>
