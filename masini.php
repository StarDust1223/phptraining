<?php 
// $masini=["Dacia","Volvo","Renault","Toyota"];
//     foreach($masini as $locatie => $m){
//         echo "$locatie => $m <br>";

//     }


// $masini2=[
//     "bune"=>["Dacia", "Volvo"],
//     "rele"=>["Renault", "Toyota"],
//     "meh"=>["Trabant", "Lastun", ["cal", "iepure"] ],
// ] ;  
//     foreach($masini2 as $key => $masini){
//         echo $key . " => <br>";
//         foreach($masini as $key2 => $masina) {
//             echo "$key2 => $masina / ";
//         }
//         echo "<br>----------------------------------<br>";
//     }

//     echo $masini2["meh"][2][1];
$elevi=[
    "Mihaela" =>[
        "Matematica"=>[7, 10, 3],
        "Romana"=>[10, 10, 2],
        "Geografie"=>[5,7]
    ], 
    "Ovidiu" => [
        "Franceza" => [10, 10, 10, 1],
        "Engleza" => [6,3,8]
    ]
];
$medii=["Total" => 0];
$gcount = 0;
$gsuma = 0;
    foreach($elevi as $key=> $elev){
        echo "key =>" . $key . "<br>";
            foreach($elev as $materie=> $note){
                echo "Materie -> $materie <br>";
                $count = count($note);
                $gcount += $count;        
                $suma = 0;
                    foreach($note as $nota){
                        echo "Nota -> $nota";
                        $suma += $nota;
                    }
                $gsuma += $suma;
                $medii[$key][$materie] = $suma / $count;    
            }
    }
    echo "<br><hr>";
    echo $gsuma . 'gsuma';
    echo $gcount . 'gcount';
    echo "<br><hr>";
$medii['Total'] = $gsuma / $gcount;
echo "<br><hr>";
var_export($medii);

    // $arr = [];

    // $arr[] = "bla";
    // $arr['Mihaela'] = "ceva";
    // var_dump($arr);
    //scrie media ca functie pt fiecare materie si generala
?>