<?php 
// Scrie un program care sa-mi afiseze pe ecran drumul pana la piata si de la piata inapoi.
// Drumul pana la piata: in fata x 5 ori, dreapta, in fata de 2 ori, stanga, in fata de 2 ori
// ex: .. poti folosi sageti sau emoticonuri

//     in fata 
//     in fata 
//     in fata 
//     in fata 
//     in fata 
//     dreapta
//     in fata
//     in fata
//     stanga
//     in fata
//     in fata


// function fata(){
//     echo "In fata<br>";
// }
// function dreapta(){
//     echo "La dreapta<br>";
// }
// function stanga(){
//     echo "La stanga<br>";
// }
// for($i=0; $i<5; $i++){
//     fata();
// }
// dreapta();
// for($i=0; $i<2; $i++){
//     fata();
// }
// stanga();
// for($i=0; $i<2; $i++){
//     fata();
// }

$mergLaPiata=[
    "am plecat de acasa",
    "in fata","in fata","in fata","in fata","in fata",
    "la dreapta",
    "in fata","in fata",
    "la stanga",
    "in fata","in fata", "am ajuns la piata"
];

$mergLaScoala=[
    "am plecat de acasa","in fata","in fata","in fata","in fata","in fata",
    "la dreapta",
    "in fata","in fata",
    "la stanga",
    "in fata","in fata", "am ajuns la scoala"
];

function merge($pasi, $siInapoi = false){
    foreach($pasi as $pas) {
        echo $pas . "<br>";
    }
    if($siInapoi) {
        $inapoi = array_reverse($pasi);
        foreach($inapoi as $pas) {
            echo $pas . "<br>";
        }
    }
    
}

echo "Mergem inapoit acasa <br>";
// $dimTablou = count($pasi);
// for($i = $dimTablou -1; $i > -1; $i--) {
//     echo $pasi[$i] . "<br>";
// }
$mergDeNebun = true;
merge($mergLaScoala);
merge($mergLaPiata, $mergDeNebun);
?>
