<?php 
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
function topfive(){
    if(!isset($_COOKIE['counter'])) {
        print_r('Not clicked');
        }
 else{
    $countercookie=$_COOKIE['counter'];
    $counter= json_decode($countercookie, true);
    arsort($counter);
    $newArray = array_slice($counter, 0, 5, true);
    echo "The top five services seen are: \n" ."<br>";
    //Prints the array
    foreach($newArray as $key => $value){
        echo getval($key) . " is seen " . $value ." times \n" ."<br>";
    }
}
}
topfive();
?>