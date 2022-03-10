<?php
// $arr = [1,4,2,5,6,0,1,1,1,1,1,3,3,3,3,3,4,4,4,4,4,5,5,15];
// arsort($arr);
// $arr2= array_unique($arr);
// foreach($arr2 as $thing){
//     echo $thing;
// }


//phpinfo();
function macaroane(&$nr){
    echo "$nr - ravioli <br>";
    if($nr < 5) {
        return macaroane($nr++);
    }
    echo "Salata";
}

macaroane(1);

// PHP code to get the Fibonacci series
// Recursive function for fibonacci series.
// function Fibonacci($number){
	
// 	// if and else if to generate first two numbers
// 	if ($number == 0)
// 		return 0;	
// 	else if ($number == 1)
// 		return 1;	
	
// 	// Recursive Call to get the upcoming numbers
// 	else
// 		return (Fibonacci($number-1) +
// 				Fibonacci($number-2));
// }

// // Driver Code
// $number = 50;
// for ($counter = 0; $counter < $number; $counter++){
// 	echo Fibonacci($counter),' ';
// }
?>