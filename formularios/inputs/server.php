<?php
    echo"<pre>";
    print_r($_POST["nombre"]);
    echo"</pre>";

    echo"<pre>";
    var_dump($_POST["personas"]);
    echo"</pre>";

    echo"<pre>";
    print_r($_POST["persona"]);
    echo"</pre>";

    echo"<pre>";
    var_dump($_POST["list1"]);
    var_dump($_POST["list2"]);
    var_dump($_POST["list3"]);
    echo"</pre>";

    echo"<pre>";
    var_dump($_POST["pais"]);
    echo"</pre>";

    echo"<pre>";
    print_r($_FILES["galeria"]);
    echo"</pre>";
?>