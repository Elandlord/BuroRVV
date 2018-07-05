<?php

echo "<script language='javascript'>\n";
echo "location.href=\"${_SERVER['SCRIPT_NAME']}?${_SERVER['QUERY_STRING']}"."&width=\" + screen.width;\n";
echo "</script>\n";
exit();

?>

