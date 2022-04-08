<?php 
$limbi=[
    "en" =>["hello", "bye"], 
    "ro"=>["Buna ziua", "La revedere"], 
    "fr"=>["Bonjour", "Au revoir"]
];



$limba="ro";
    if(isset($_GET['lang']) && !empty($_GET['lang'])){
        // am facut switch la limba
        $toateLimbile = array_keys($limbi);
        $exista = false;
        $limba = $_GET['lang'];
        foreach($toateLimbile as $cheie) {
            if($limba == $cheie) {
                $exista = true;
                break;
            }
        }   
        if( !$exista ){
            $limba = "ro";
        }     
    
    } else{
        // luamlimba din cookie
        $limba = isset($_COOKIE['limba']) ? $_COOKIE['limba'] : 'ro'; 
    }
    
    setcookie('limba', $limba, time() + 600);

    foreach($limbi[$limba] as $key => $value) {
        echo $value;
    }



?>

<html>

<a href="/phptraining/limbi.php?lang=en">EN</a>
<a href="/phptraining/limbi.php?lang=ro">RO</a>
<a href="/phptraining/limbi.php?lang=fr">FR</a>
</html>