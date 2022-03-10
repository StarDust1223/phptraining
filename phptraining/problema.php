<?php
$nr=[1, 2 , 4, 6, 10, 15, 7 , 8, 8, 12, 99, 14, 44, 102, 3006, 62];
$k=0;
$max=0;
foreach($nr as $key => $n){
    if($n%2==0){
        $k++;
        if ($k>$max){
            $max=$k;
        }
    }
    else{
        $k=0;
    }

}
if($k>$max){
    $max=$k;
}

echo $k . "<br>";
echo $max;

?>