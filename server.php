<?php

$paragrafo = $_GET["paragrafo"];

$parola_da_censurare = $_GET["censura"];

// $censura = "***"

$nuova_frase = str_replace($parola_da_censurare, "***", $paragrafo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>La tua frase originale è: <?php echo $paragrafo; ?></p>
        <p>e la sua lunghezza è: <?php echo strlen($paragrafo) ?></p>
    </div>
    <div>
        <p>La tua frase con la censura è: <?php echo $nuova_frase ?></p>
        <p>e la sua lunghezza è: <?php echo strlen($nuova_frase) ?></p>
    </div>
</body>
</html>
