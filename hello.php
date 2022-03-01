<?php
function phpreadfile($filename){
	
	$myfile=fopen($filename,"r") or die("Unable to open file");
	$filecontent=fread($myfile,filesize($filename));
	fclose($myfile);
	return $filecontent;
}

echo phpreadfile("filer.txt");










?>