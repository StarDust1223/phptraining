<?php
//echo readfile('users.txt');
$file = fopen('users.txt', "a") or die("Nu am putut deschide fisierul");
fwrite($file, "Oana \n");
fclose($file);

$file = fopen('users.txt', 'r');

while(!feof($file)) {
    echo ">>" . fgets($file) . "<br>";
}
echo  "--------------------------------------------<br/>";
// while(!feof($file)) {
//     echo ">>" . fgetc($file) . "<br>";
// }
fclose($file);
?>
