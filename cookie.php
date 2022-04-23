<?php
 function clickProduct($productNo){
    addTolastfive($productNo);
    counter($productNo);
}
function addTolastfive($productNo){

    if(!isset($_COOKIE['recents'])) {
    $recents = array($productNo);
    $ar=json_encode($recents);
    setcookie('recents', $ar, time() + (86400 * 30), "/");
 
    }
    else
    {$recentscookie=$_COOKIE['recents'];
    $recents= json_decode($recentscookie, true);

   
    if (in_array($productNo, $recents)){
        foreach ($recents as $key => $value){
            if ($value == $productNo) {
                unset($recents[$key]);
            }
        }
    }
    if (sizeof($recents) == 5){
        array_pop($recents);
    }
    array_unshift($recents,$productNo);
    $ar=json_encode($recents);
    setcookie('recents', $ar, time() + (86400 * 30), "/");
}
}
function counter($productNo){

if(!isset($_COOKIE['counter'])) {
$counter = array($productNo => 1);
$ar=json_encode($counter);
setcookie('counter', $ar, time() + (86400 * 30), "/");

}
else
{$countercookie=$_COOKIE['counter'];
$counter= json_decode($countercookie, true);

if (array_key_exists($productNo, $counter)){
 
    $counter[$productNo] =  $counter[$productNo] + 1;
}
else {
    $counter[$productNo] = 1;
}

$ar=json_encode($counter);
setcookie('counter', $ar, time() + (86400 * 30), "/");

}
}
function topfive($array){
    if(!isset($_COOKIE['counter'])) {
        print_r('Not clicked');
        }
 else{
    $countercookie=$_COOKIE['counter'];
    $counter= json_decode($countercookie, true);
    arsort($counter);
    $newArray = array_slice($counter, 0, 5, true);

}
}
    clickProduct(5)
   
?>