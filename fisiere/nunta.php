<?php
$file1 = fopen('users.txt', 'r') or die("Nu am putut deschide fisierul");
$file2 = fopen("users2.txt", "r") or die("Nu am putut deschide fisierul");
$file3 = fopen("nunta.txt", "w");
$mese = [4, 4, 4, 8, 2];
$invitati=[];
while(!feof($file1)){
    $nume = strtoupper(fgets($file1));
    //fwrite ($file3, $nume);
    $invitati[] = $nume;
}

while(!feof($file2)){
    $nume = strtoupper(fgets($file2));
    //fwrite($file3, $nume);
    $invitati[] = $nume;
}

asort($invitati);
var_dump($invitati);
// de sortat invitatii
// de scris in fisier3
foreach($invitati as $invitat){
    if(trim($invitat)){
        $invitat = str_replace("\n", "", $invitat);
        fwrite($file3, $invitat . "\n");
    }
}

fclose($file1);
fclose($file2);
fclose($file3);

echo "invitati:" . count($invitati);

// sa imparta invitatii pe mese.
// sa afiseze cine ramane pe dinafara





//scrie toate numele cu litere mari, in dnd scrie numele user si scor la final +clasament
?>
