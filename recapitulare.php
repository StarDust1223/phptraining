<?php 
$title="Titlu";
$subtitle="Subtitlu";
$k=0;
$masini=["Scoda", "Dacia", "Volvo","VW", "Renault", "BMW"];
$tari=[
    "Romania"=>["loc"=>18, "pib"=>50],
    "Franta"=>["loc"=>20, "pib"=>200],
    "Germania"=>["loc"=>30, "pib"=>100]
];

function nume($masina){
    $dim  = strlen($masina);
    if($dim>3){
       return $masina;
    }
    else {
        return "-";
    }
}

function productivitate($tari){
    $prod=[];
    foreach($tari as $key => $value){
       $prod[$key] =round($value["pib"]/$value["loc"], 2) ; 
   }
   arsort($prod);
   return $prod;
}
?>

<html>
    <head>
    <title>Mihaela</title>
    </head>

    <body>
        <h1>
            <?php 
        echo $title;
        ?> 
        </h1>

        <h2>
        <?php 
        echo $subtitle;
        ?> 
        </h2>
        <?php 
        $color="red";

        while ($k<count($masini)){
            if($k%3==0){
               $color="green" ;
            }
            elseif($k%2==0){
               $color="red";
            }
            else{
               $color="blue" ;
            }
            $masina = "paragraf";
            if(isset($masini[$k])){
                $masina = $masini[$k];
            }

            echo "<p style='color: $color'> " . nume($masina) . " $k</p>";
 
            $k++;
        }
        foreach(productivitate($tari) as $key => $value){
           echo "<h5>" . $key ." - ". $value . "</h5>";
        }
        
        ?>

<!-- functie
        val1 - operator - val2 -> calculeaza
        numar - (adunare, scadere, inmultire, impartire) -  numar -->

        <form action="calculeaza.php">

        <input type="number" name="val1">

        <select name="op" >
            <option value="adunare"> + </option>
            <option value="scadere"> - </option>
            <option value="inmultire"> * </option>
            <option value="impartire"> / </option>
            <option value="impartire"> % </option>
            <option value="impartire"> pow </option>
        </select>

        <input type="number" name = "val2">
        <button> Calculeaza </button>
        </form>

        Rezultat:
        


    </body>
</html> 