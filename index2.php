<?php 
  $x = 0;
  while ($x <= 4)
  {
   echo ++$x;
}
 echo "x este egal cu" . $x . "<br/>";
 $x = 0;
 do { echo ++$x; }
    while ($x <= 4);
    echo "<br/>";

    for($x=1; $x<=5; $x++)
    {
        if($x%2 != 0){
        continue; 
        //break;
        }
        echo $x;
    }
    echo "<br/>";

    for($x=1; $x<=5; $x++){
     echo $x . "-" . $x*$x . "<br/>";
    }

    echo "<br/>";
  

    // <h1>Mihaela</h1>
    // <h2>Mihaela</h2>
    // <h3>Mihaela</h3>
    for($i=1; $i<7; $i++){
        $tag = "<h$i>";
        $endtag = "</h$i>";
        $mesaj = "Mihaela nu lucreaza suficient";
        echo $tag . $mesaj . $endtag;
    }

    // vreau o functie care.. sa-mi ia 2 parametri numarul ridicat la putere si puterea
    // functia trebuie sa-mi intoarca numarul ridicat la putere
    function putere($nr, $pt){
        if($nr == null) {
            echo "Numarul nu a fost pasat";
            return null;
        }
        if($pt == null) {
            echo "Puterea lipseste";
            return null;
        }
        $rezultat = $nr;
        for($i=0;$i<$pt - 1;$i++){
            $rezultat *= $nr;
        }
        return $rezultat;
    }
    for($j=10; $j>1; $j--){
        echo putere(2, $j) . "<br/>";
    }

    // var_dump(1==1);
    // var_dump(1==2);
    // var_dump("1"==1);
    // var_dump("1"===1);
    // var_dump(1==true); //true
    // var_dump(1===true); // false
    var_dump(1!=1);
    var_dump(1!=false);
    var_dump(true!=false);
    var_dump(true!==1);
    var_dump(true!=1);
    var_dump(true!=0);
    var_dump(true==12);
?>