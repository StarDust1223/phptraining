<?php 
for ($k=1; $k<= 100; $k++){
    if($k%15==0){
        echo $k . "fizzbuzz" . "<br>";
    }elseif ($k%3==0){
        echo $k . "fizz" . "<br>";
    } elseif ($k%5==0){
        echo $k . "buzz" . "<br>";
    }else {
        echo $k . "<br>";
    }
}
?>