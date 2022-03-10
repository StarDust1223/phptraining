<?php
    echo "<h1>SCOR FINAL: </h1>" . $_COOKIE['scor'] . "<br>";
    setcookie('pos', 0, time() - 3600);
    setcookie('scor', 0, time() - 3600);
?>

<a href="/phptraining/quizz.php">Reincepe</a>