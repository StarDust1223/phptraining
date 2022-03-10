<?php 
$nrGauri = 4;
$posIepure = rand(1, $nrGauri);
$gasit = false;
echo "iepurele pleaca de la $posIepure <br>";


function sare(){
    global $nrGauri;
    global $posIepure;
    $directie = 1; // directie inainte
    if(rand(1, $nrGauri) > $nrGauri / 2){
        $directie = 0; // directie inapoi
    }
    if($posIepure === $nrGauri) {
        $directie = 0;
    }

    if($posIepure === 1) {
        $directie = 1;
    }

    if($directie === 1){
        $posIepure++;
    }
    else {
        $posIepure--;
    }
    echo "Positia iepurelui este $posIepure <br>";
}

$cautLa = 1;
while(!$gasit && $cautLa <= $nrGauri){
    echo "Cautam la $cautLa <br>";
    if($cautLa === $posIepure){
        $gasit = $posIepure;
        break;
    }
    $posIepureDinUrma = $posIepure -1 ; 
    if($cautLa === $posIepureDinUrma){
        $gasit = $posIepureDinUrma;
        break;
    }
    sare();
    $cautLa++;
}

if($gasit){
    echo "Iepurele a fost gasit la $posIepure";
}
else {
    echo "Iepurele nu a fost gasit";
}
?>