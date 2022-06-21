<?php
    echo"<pre>";
    var_dump($_POST);
    echo"</pre>";

    $nombre = $_POST["nombre"];
    $edad=$_POST["edad"];

    echo "El usuario $nombre tiene $edad años.";
?>