<?php
    $nombre="Mr. Michi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiqutas con PHP</title>
</head>
<body>
    <?php echo"<b>Hola estoy aprendiendo a PHP con HTML</b><br>";?>
    <?= "<i>Esta es otra forma de imprimir texto y etiquetas con PHP</i>"?>
    <h2>¡Hola <?= $nombre ?>!</h2>
</body>
</html>