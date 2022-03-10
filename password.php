<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 

if(!isset($_POST['uname']) || !isset($_POST['pass'])){  //Redirect somewhere 
} 

$ourFileName = $_POST['uname'] ."users.txt";

$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");

fclose($ourFileHandle); $fopen = fopen($ourFileName, 'a');

fwrite($fopen, $_POST['pass']);

fclose($fopen);


	?>
</body>
</html>