<?php
$frase = 'Oggi censuriamo';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Php Bad words</title>
</head>
<body>
    
<form action="./response.php" methods="post">
<h1><?php echo $frase; ?></h1>
<label for="text">Inserisci la frase da censurare</label>
<div>
<textarea name="phrase" id="" cols="30" rows="10"></textarea>
</div>
<label for="word">Inserisci la parola da censurare</label>
<input type="text" name="deleteWord">
<button type="submit">Invia le parole</button>
</form>
</body>
</html>