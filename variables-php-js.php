<?php
    $usuarios=array(
        array("id"=>0,"nombre"=>"Mr. Michi"),
        array("id"=>1,"nombre"=>"Cielo"),
        array("id"=>2,"nombre"=>"Art"),
        array("id"=>3,"nombre"=>"Evangeline"),
        array("id"=>4,"nombre"=>"Bruno"),
    );
    $edad=12;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variable de PHP a JavaScript</title>
</head>
<body>
    <script>
        let users =JSON.parse('<?= json_encode($usuarios)?>');
        // console.log(users);
        let edad=<?= $edad?>;
        // console.log(edad);

    </script>
    <script src="./variables-php-js.js"></script>
</body>
</html>