<?php
	$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
	$txt = $_POST["one"].", ".$_POST["two"].", ".$_POST["three"].", ".$_POST["four"]."\n";
	fwrite($myfile, $txt);
	fclose($myfile);
	header("Location: index.php");
?>