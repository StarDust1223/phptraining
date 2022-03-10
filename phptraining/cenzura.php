<!-- un formular
cu un textarea
un loc unde sa pot tasta un text lung
si vreau sa existe un array cu cuvinte interzise
in pagina sa se afiseze textul introdu cu acele cuvinte inlocuite cu ＼(^o^)／ ～(つˆДˆ)つ｡☆
sa fie aleatoriu intre ele cu un array de emotes -->

<!-- var dump get str replace
str_replace(find,replace,string,count)  -->

<?php
$emotes=["～(つˆДˆ)つ｡☆", "＼(^o^)／", "╰(⸝⸝⸝´꒳`⸝⸝⸝)╯", "(´∩｡• ᵕ •｡∩`)", "(;ŏ﹏ŏ)", "(ಠ_ಠ)━☆ﾟ.*･｡ﾟ", "CRIES IN ESPANIOL", "wapwapwap", "NaChOlUkYdAy"];
//$interzis=["scoala", "injuratura", "teme", "cuvant urat"];
$random = $emotes[array_rand($emotes)];

function magie($cheie){
 return isset($_POST[$cheie]) ? htmlspecialchars(htmlentities($_POST[$cheie]), ENT_QUOTES, 'UTF-8') : null;
}

$inlocuitori=magie("inlocuitori");
$interzis = explode(",", $inlocuitori);
foreach($interzis as $key => $value) {
  $interzis[$key] = trim($value); // scoala, nasoala => ['scoala', ' nasoala'];
}
$text=magie("deInlocuit");

// function culoare(){
//   $litere=["a","b","c","d","e","f"];
//   echo $litere[array_rand($litere)];
//   echo rand(1,9);
//   echo $litere[array_rand($litere)];
//   echo rand(1,9);
//   echo $litere[array_rand($litere)];
//   echo rand(1,9);
// }
// culoare();


function culoareRGB(){
  //         r          ,,        g          ,        b
  return rand(0,255) . "," . rand(0,255) . ",". rand(0,255);
}
 
function culoareInversaRGB($r, $g, $b) {
  $invers = array(
      'r' => ($r < 128) ? 255 : 0,
      'g' => ($g < 128) ? 255 : 0,
      'b' => ($b < 128) ? 255 : 0
  );
  // ['r'=>200, 'g'=>100, 'b'=>2];
  return  $invers['r'] .  ","  . $invers['g'] . "," . $invers["b"];a 
}
$culoare = culoareRGB();
$exploded = explode(',',$culoare ); // ne transforma din r,g,b in [r, g, b]
$culoareInversa = culoareInversaRGB($exploded[0], $exploded[1], $exploded[2]);
?>

<html>
<head></head>

<style>
body {
    background-color:rgb(<?=$culoare?>) 
  }
  
body {
    /* mix-blend-mode: difference; */
    color: rgb(<?=$culoareInversa?>);
  }
</style>

<body>
  <!-- GET POST PUT DELETE OPTIONS -->
<form action="#" method="POST">
<label for="deInlocuit">textul tau</label>

<textarea id="deInlocuit" name="deInlocuit" rows="20" cols="20"><?=$_POST['deInlocuit']?></textarea>

  <label for="inlocuitori">inlocuitori</label>

<textarea id="inlocuitori" name="inlocuitori" rows="20" cols="20"><?=html_entity_decode($text)?></textarea> 
<br><br>
  <input type="submit" value="Submit">
</form>
<?php echo str_replace($interzis, $random, html_entity_decode($text)); ?>


</body>
<!-- cum functioneaza codul hex, daca fundal culoare, text=culoare opusa -->
</html> 