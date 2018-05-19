<?php
public function index($line){
	$file = file('newfile.txt'); 
	$data = ''; 
		for ($i=0; $i<count($file); $i++) 
		{ 
			if (!strstr($file[$i],$line)) 
			{ 
			$data .= $file[$i]; 
			} 
		} 
?>