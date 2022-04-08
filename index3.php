<?php 

$nrGauri = 10;
$posIepure = rand(floor($nrGauri/3), $nrGauri);
$gasit = false;

echo "Iepurele pleaca de la $posIepure <br>";

function sare() {
    global $nrGauri;
    global $posIepure;
    $direction = "inainte";
    if(rand(0, $nrGauri) < $nrGauri / 2) {
        $direction = "inapoi";
    }
    if($direction === "inainte") {
        if($posIepure === $nrGauri){
            $posIepure--; 
        } else {
            $posIepure++; // iepurele sare in fata
        }
    }

    if($direction === "inapoi") {
        if($posIepure === 1){
          $posIepure++;
        }else { 
            $posIepure--; // iepurele sare in spate;
        }
       
    }
    echo "Iepurele  a sarit la <b> $posIepure </b></br>";
}

for($i = 1; $i <= $nrGauri; $i++){
    global $gasit;
    echo  "Verificam la pozitia $i <br>";
    if($posIepure === $i){
        $gasit = $posIepure ;
        // oprim cautarea
        break;
    }
    // if($posIepure === $i - 1) {
    //     $gasit = $posIepure - 1;
    // }
    sare();
}

if(!$gasit) {
    for($i = 2; $i <= $nrGauri; $i++){
        global $gasit;
        echo  "Verificam la pozitia $i <br>";
        if($posIepure === $i){
            $gasit = $posIepure ;
            // oprim cautarea
            break;
        }
        
        sare();
    }
}

if($gasit == true) {
     echo "<h1>Am gasit iepurele la pozitia $gasit !</h1>";
} else {
    echo "<h1>Iepurele nu este aici</h1>";
}


?>


* _ Y _ 
_ * _ Y 
_ _ Y *  

_ _ Y _
_ * _ Y



