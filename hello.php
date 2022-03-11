<?php

$file = file('filer.txt');

foreach($file as $line_num => $line) {
    print "$line</br>"; 
}

print "</br>";



?>