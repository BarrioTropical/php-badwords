<?php
//prendiamo dal form
$phrase = $_POST['phrase'];
$deleteWord = $_POST['deleteWord'];

//generiamo le risposte (lunghezza e la parola cancellata che stampiamo nell'html sotto)
$lengthPhrase = strlen($phrase);
$deleteWord = str_replace($deleteWord, "***", $phrase )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risposta form Index</title>
</head>
<body>
    <h3>Il testo che hai inserito: <span><?php echo $phrase?></span></h3>
    <h3>Il testo è lungo: <span><?php echo $lengthPhrase?></span></h3>
    <h3>E' stata censurata la parola: <span><?php echo $deleteWord?></span></h3>
    <h3>Il testo censurato invece è: <span><?php echo $deleteWord?></span></h3>
</body>
</html>