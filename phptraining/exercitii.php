<?php 
//   $arr = [1, 2, [1,2,3, [2,1]], 4];
//   echo $arr[1];
//   echo $arr[2][1];
//   echo $arr[2][3][0];

//   $arr2 = array(1,2); // []
//   $arr3 = ["pisica"=>[1,2,3,4, "caine" => ['pisica'=>['pui1','pui2'], 2]]];
//   echo  $arr3["pisica"]["caine"]["pisica"][1];
$animale = $_GET;
var_dump($animale);


?>

<form action="">
    <input type="text" name="pisica" placeholder="pisica">
    <input type="text" name="caine" placeholder="caine">
    <input type="text" name="gaine" placeholder="gaine">
    <input type="submit" value="Trimite">
</form>


<!-- http://localhost/phptraining/exercitii.php?pisica=pui&caine=llabrador&gaina=[0,1,2] -->