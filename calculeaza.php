<html>
    <head>
    <title>Calculator</title>
    </head>

    <body>

    <?php


    
    $val1 = isset($_GET["val1"]) ? $_GET['val1'] : 0;
    $val2 = isset($_GET["val2"]) ? $_GET["val2"] : 0;
    $op= isset($_GET["operatiune"]) ? $_GET["operatiune"] : 0;
    $rezultat = 0;
    $raspuns = isset($_GET["raspuns"]) ? $_GET["raspuns"] : 0;
    if(isset($_COOKIE['scor'])) {
      $scor = $_COOKIE['scor'];
    } else {
      setCookie('scor', 0, time() + 3600);
    }
    ?>
<!-- functie
        val1 - operator - val2 -> calculeaza
        numar - (adunare, scadere, inmultire, impartire) -  numar -->
      <form method="">
        <input type="number" name="val1" value="<?php echo $val1;?>">

        <select name="operatiune">
            <option <?php echo $op == 'adunare' ? "selected" : ''?> value="adunare"> + </option>
            <option <?php echo $op == 'scadere' ? "selected" : '' ?> value="scadere"> - </option>
            <option <?php echo $op == 'inmultire' ? "selected" : '' ?> value="inmultire" > * </option>
            <option <?php echo $op == 'impartire' ? "selected" : '' ?> value="impartire"> / </option>
            <option <?php echo $op == 'rest' ? "selected" : '' ?> value="rest"> % </option>
            <option <?php echo $op == 'putere' ? "selected" : '' ?> value="putere"> pow </option>
        </select>

        <input type="number" name = "val2" value="<?php echo $val2;?>">
        <input type="text" name="raspuns" placeholder="Raspunsul" value="<?php echo $raspuns;?>">
        <button> Calculeaza </button>
        </form>
        
        
<?php 



function adunare ($val1, $val2) {
  return $val1+$val2;
}

 function scadere ($val1, $val2) {
  return $val1-$val2;
}

function inmultire ($val1, $val2) {
  return $val1*$val2;
}

function impartire ($val1, $val2) {
  return $val1/$val2;
}

function rest ($val1, $val2) {
  return $val1%$val2;
}

function putere ($val1, $val2) {
  return $val1**$val2;
}

switch($op){
    case 'adunare':
      $rezultat = adunare($val1, $val2);
    break;
    case 'scadere':
      $rezultat = scadere($val1, $val2);
    break;
    case 'inmultire':
      $rezultat = inmultire($val1, $val2);
    break;
    case 'impartire':
      $rezultat = impartire($val1, $val2);
    break;
    case 'rest':
      $rezultat = est($val1, $val2);
    break;
    case 'putere':
      $rezultat = putere($val1, $val2);
    break;
}

if ($rezultat == $raspuns){
  $scor++;
  setCookie("scor", $scor, time() + 3600);
  echo "bravo ";
}
else{
  echo "gresit ";
}
echo "rezultatul este " . $rezultat . " <br>";
echo "Ai raspuns corect la " . $scor . " intrebari";
       ?>

    </body>
</html> 