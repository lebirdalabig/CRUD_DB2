<?php
	include "index.php";
	$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
	$txt = array(
		'one' => $_POST['one'],
				'two' => $_POST['two'],
				'three' => $_POST['three'],
				'four' => $_POST['four'],
	);
	echo $txt;
	fwrite($myfile, $txt);
	fclose($myfile);
	header("Location: index.php");
?>