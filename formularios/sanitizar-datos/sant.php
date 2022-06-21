<?php
    $palabra = $_POST["nombre"];
    $htmlentities=htmlentities($palabra);
    $addslashes = addslashes($palabra);
    $solo_letras= preg_replace("/\d/","",$palabra);
    $solo_numeros= preg_replace("/\D/","",$palabra);
    $email = filter_var($palabra,FILTER_SANITIZE_EMAIL);
    $edad = filter_var($palabra,FILTER_SANITIZE_NUMBER_INT);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Elemetos html</h2>
    <?=$htmlentities?>
    <br>
    <h2>Agrega pestañas</h2>
    <ol>Cadena con barras invertidas añadidas antes de los caracteres que deben escaparse. Estos personajes son:
        <li>comilla simple ( ')</li>
        <li>comillas dobles ( ")</li>
        <li>barra invertida ( \)</li>
        <li>NUL (el byte NUL)</li>
    </ol>
    <br>
    <?=$addslashes ?>
    <br>
    <h2>Solo letras</h2>
    <?=$solo_letras ?>
    <br>
    <h2>Solo numeros</h2>
    <?=$solo_numeros?>
    <br>
    <h2>Email</h2>
    <?=$email?>
    <br>
    <h2>Edad</h2>
    <?=$edad?>
</body>
</html>