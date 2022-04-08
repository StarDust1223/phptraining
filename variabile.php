<?php 
$nume="mihaela";
$mihaela=15;
$fisiere = range(1,10);
foreach($fisiere as $fisier){
    $numeFisier = "file" . $fisier;
    $numeFisierComplet = $numeFisier . ".txt"; 
    if(file_exists($numeFisierComplet)){
        $$numeFisier = fopen($numeFisierComplet, "r" );
        // fgets pe $$numeFisier
        // adaugare in array
        fclose($$numeFisier);
    
    }
    
};


?>