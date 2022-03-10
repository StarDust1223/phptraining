<?php 
// Scrie un program care sa-mi descrie macarena (afiseaza miscarile de dans):
// Macarena:
// bat din palme
// pas la stanga
// pas la dreapta
// .... de 3 ori

// invart bazinul la dreapta
// invart bazinul la stanga
// ..... de 2 ori

// sar la 180 de grade si repet pasii de dinainte pana cand sunt obosit

// Codul trebuie grupat in functii si variabile. Poti folosi orice tip de bucla
 $obosit=false;
 $danceTimes=0;
 function primaMiscare(){
    echo 'bat din palme /pas la stanga /pas la dreapt<br>';
 }
 function douaMiscare(){
    echo 'invart bazinul la dreapta/ invart bazinul la stanga<br>';
 }
 function salt(){
    echo 'sar la 180<br>';
 }
 while($obosit==false){
     primaMiscare();
     douaMiscare();
     salt();
    $danceTimes++;
    if ($danceTimes==3){
        $obosit=true;
    }
 }

?>