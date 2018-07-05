<?php

include("fckeditor.php") ;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>FCKeditor - Sample</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="noindex, nofollow">
		<link href="../fckeditor/editor/css/fck_editorarea.css' rel="stylesheet" type="text/css" />
	</head>
	<body>
		<form action="sampleposteddata.php" method="post" target="_blank">
<?php
$sBasePath = '../fckeditor/' ;

$oFCKeditor = new FCKeditor('FCKeditor1') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= 'Test' ;
$oFCKeditor->Create() ;
?>
			<br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
