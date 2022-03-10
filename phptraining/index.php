<?php 

function afiseaza($valoare, $eticheta){
    echo $eticheta . " => " . $valoare . '<br>';
}

function adunare($nr1, $nr2){
    return $nr1 + $nr2;
}

function bazar() {
    $cactus = 10;
    $cadouCactus = 4; //nr de cactusi dati cadou la fiecare stevie
    $stevie = 20;
    $ridiche = 20.5;
    $cadou = 0;

    for($i = 0; $i<5; $i++){
        $stevie--; // dupa for loop avem 15
        if($i<3){
        $ridiche++;
        }
        
        if($cactus<$cadouCactus){
        echo "Scz no more cactus" . $cactus . '<br>';
        }
        else {$cactus-=$cadouCactus; 
        $cadou++;
        }
        afiseaza("🪴", "Acum avem " . $stevie . " stevii");
    }

    afiseaza($cactus, "cactus");
    afiseaza($stevie, "stevie");
    afiseaza($ridiche, "ridiche");
    afiseaza($cadou, "cadou");
    afiseaza(adunare(adunare($cactus, $ridiche), $stevie) * 5, "Total 💰 lei");
}

bazar();

echo  "=========================================================== <br>";



function merge() {
    $distPanaLaRapa = 20;
    // while ($distPanaLaRapa >0) {
    //     $distPanaLaRapa--;
    //     afiseaza ($distPanaLaRapa, "Dist ramasa");

    // }
    do {
        $distPanaLaRapa--;
        afiseaza ($distPanaLaRapa, "Dist ramasa");
    }
    while ($distPanaLaRapa >0);
}

merge();








?>