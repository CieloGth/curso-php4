<?php
    echo"<pre>";
    var_dump($_FILES);
    echo"</pre>";
    
    $basenombre= $_FILES["image"]["name"];

    echo $basenombre;

    
?>