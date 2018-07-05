<?php

require "../defaults/defaults.php";

echo "<TABLE WIDTH='180' BORDER='0' CELLSPACING='0' CELLPADDING='0' HEIGHT='180'>\n";
echo "<TR>\n";
echo "<TD WIDTH='100%' ALIGN='CENTER'>\n";

echo "<IMG name='SLIDESIMG' src='$slide01' width='180' border='0' style='filter:progid:DXImageTransform.Microsoft.Fade()' alt='$websitetitle'>\n";

echo "</TD>\n";
echo "</TR>\n";
echo "</TABLE>\n";

echo "<SCRIPT type='text/javascript'>\n";
echo "<!--\n";
echo "if (document.images){\n";
echo "SLIDES.image = document.images.SLIDESIMG;\n";

// Create a function to ramp up the image opacity in Mozilla
echo "var fadein_opacity = 0.04;\n";
echo "var fadein_img = SLIDES.image;\n";
echo "function fadein(opacity) {\n";
echo "  if (typeof opacity != 'undefined') { fadein_opacity = opacity; }\n";
echo "  if (fadein_opacity < 0.99 && fadein_img && fadein_img.style &&\n";
echo "      typeof fadein_img.style.MozOpacity != 'undefined') {\n";
echo "    fadein_opacity += .05;\n";
echo "    fadein_img.style.MozOpacity = fadein_opacity;\n";
echo "    setTimeout('fadein()', 50);\n";
echo "  }\n";
echo "}\n";

// Tell the slideshow to call our function whenever the slide is changed
echo "SLIDES.post_update_hook = function() { fadein(0.04); }\n";

echo "}\n";
echo "//-->\n";
echo "</SCRIPT>\n";