<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>contactus</title>
	<link href="stylecontact.css" rel="stylesheet">

</head>

<body  background-color:green>
<div id = "info">
    <div class="portlet-body">
    <?php

$file = file('filer.txt');

foreach($file as $line_num => $line) {
    print "$line</br>"; 
}

print "</br>";



?>
     </div>
 </div>
</body>
</html>
