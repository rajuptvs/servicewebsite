<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>contactus</title>
	<link href="stylecontact.css" rel="stylesheet">
	
	 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
<?php

$file = file('filer.txt');

foreach($file as $line_num => $line) {
    print "$line</br>"; 
}

print "</br>";



?>

     
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
