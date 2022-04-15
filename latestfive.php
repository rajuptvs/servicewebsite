<?php 

latestfive();



function getval($num){
    $serviceval = array(
        1 => "Branding Photography",
        2 => "Wedding Photography",
        3 => "Portfolio Photography",
        4 => "Kids Photography",
        5 => "Macro Photography",
        6 => "Aerial Photography",
        7 => "Documentary Photography",
        8 => "Sports Photography",
        9 => "Architecture Photography",
        10 => "Pet Photography"
    );
    return $serviceval[$num];
};

echo getval(2);

function latestfive(){
    if(!isset($_COOKIE['lastseen'])) {
        print_r('Not clicked any product yet');
        }
 else{

    $lastseencookie=$_COOKIE['lastseen'];
    $lastseen= json_decode($lastseencookie, true);
    //Declare the array
    echo "The latest five services seen are:\n" ."<br>";
    //Prints the array
    foreach($lastseen as $value){
        echo getval($value) . "<br>";
    }
   }
}





?>