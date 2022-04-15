<!DOCTYPE html>
  <html>
  <?php
    function clickProduct($productNo){
        addTolastfive($productNo);
        counter($productNo);
    }
    function addTolastfive($productNo){
        // $val=array(1,3,4,5,9);
        if(!isset($_COOKIE['lastseen'])) {
        $lastseen = array($productNo);
        $ar=json_encode($lastseen);
        setcookie('lastseen', $ar, time() + (86400 * 30), "/");
     
        }
        else
        {$lastseencookie=$_COOKIE['lastseen'];
        $lastseen= json_decode($lastseencookie, true);
        //print_r($lastseen);
       
        if (in_array($productNo, $lastseen)){
            foreach ($lastseen as $key => $value){
                if ($value == $productNo) {
                    unset($lastseen[$key]);
                }
            }
        }
        if (sizeof($lastseen) == 5){
            array_pop($lastseen);
        }
        array_unshift($lastseen,$productNo);
        $ar=json_encode($lastseen);
        setcookie('lastseen', $ar, time() + (86400 * 30), "/");
    }
    }
    function counter($productNo){
 // $val=array(1,3,4,5,9);
 if(!isset($_COOKIE['counter'])) {
    $counter = array($productNo => 1);
    $ar=json_encode($counter);
    setcookie('counter', $ar, time() + (86400 * 30), "/");
 
    }
    else
    {$countercookie=$_COOKIE['counter'];
    $counter= json_decode($countercookie, true);
    //print_r($counter);
    if (array_key_exists($productNo, $counter)){
        //print_r('in array');
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
        //print_r($newArray);
    }
    }
    clickProduct(1)
   
?>
<div  class="product-item-content text-center mt-30">
<h5 class="product-title"><a >Branding Photography</a></h5>

</div> 

</html>