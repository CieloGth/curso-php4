<?php
    // echo"<pre>";
    // var_dump($_FILES);
    // echo"</pre>";
    $basenombre= $_FILES["image"]["name"];
    
    $image=$_FILES["image"]["tmp_name"];
    $ruta="images/$basenombre";
    
    move_uploaded_file($image,$ruta);

    // echo $basenombre;

    
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
    <img src="<?=$ruta?>" alt="<?= $basenombre?>">
</body>
</html>