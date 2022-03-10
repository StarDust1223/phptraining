<?php
function opresteJoc(){
  
   header('Location: rezultat.php');
}

    $raspuns = isset($_GET["raspuns"]) ? $_GET['raspuns'] : null;
    $reset  = isset($_GET['reset']) ? true : false; // verificam daca exista get de reset
    // ce facem daca reset e adevarat?

    if ($reset){
      opresteJoc();
    }
    
    
    $intrebari = [
    
        ["intrebare" => "intrebarea mea", "rasp" =>"0"]    ,
        ["intrebare" => "intrebarea mea 1", "rasp" => "1"]  ,  
        ["intrebare" => "intrebarea mea 2", "rasp" => "2"]   , 
        ["intrebare" => "intrebarea mea 3", "rasp" => "3"]    ,
        ["intrebare" => "intrebarea mea 4", "rasp" => "4" , "A" => "rasp A", "B"=> "rasp B"]    
    ];

    $pos=0;
    $scor = 0;
    $raspCorect = false;

    // o sa tinem pozitia intrebarii intr-un cookie
    if(isset($_COOKIE['pos']) && !empty($_COOKIE['pos']) ) {
        // atribuim valoarea din cookie in $pos
        $pos = $_COOKIE['pos'];
    } else {
        // setam pozitia intr-un cookie
        setcookie('pos', $pos, time() + 3600);
    }

    if(isset($_COOKIE['scor']) && !empty($_COOKIE['scor']) ) {
        // atribuim valoarea din cookie in $pos
        $scor = $_COOKIE['scor'];
    } else {
        // setam pozitia intr-un cookie
        setcookie('scor', $scor, time() + 3600);
    }
 


?>


<!-- cand deschidem pagina se afiseaza prima intrevare si o casuta unde sa dai raspunsul -->
<!-- raspunsul daca e corect se incrementeaza scorul si se afiseaza urmatoarea intrebare -->
<!-- cand nu mai avem intrebari se afiseaza rezultatul si se goleste scorul din cookie  unset($_COOKIE[key]) -->


<html>
  <head></head>
  <body>
      <?php 

        if($pos == count($intrebari)){
          opresteJoc();
        }

        var_dump($raspuns === $intrebari[$pos]["rasp"]);
        var_dump($raspuns == $intrebari[$pos]["rasp"]);
        if(isset($intrebari[$pos - 1]['rasp']) && $raspuns === $intrebari[$pos - 1]["rasp"]){
          $scor++;
          setcookie("scor", $scor, time() + 3600);
        }


        echo "Scorul dvs: $scor <br>";
        echo "Intrebare:" . $intrebari[$pos]["intrebare"] . "<br>";
        echo "raspunsul dvs." . $raspuns;

        $pos++;
        setcookie("pos", $pos, time() + 3600);

      ?>

<form action = "#">
<input type="hidden" name= 'reset'>
   <button>Reseteaza</button>
</form>

   <form action="">
     <input type="text" required name="raspuns">
     <button type="submit">Raspunde</button>
   </form>
  

  </body>
</html>