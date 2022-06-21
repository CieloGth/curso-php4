<?php
    $usuarios =["Carlos","Mr. Michi","Cielo","Maria","Juan","x"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    <ul> For
        <?php for ($x=0; $x < 10; $x++):?>    
            <li><?= $x?></li>
        <?php endfor; ?>
        <?php $i=0;?> 
    </ul>

    <ol> While
        <?php while($i<10): ?>
            <li>cualquier cosa</li>
            <?php $i++;?>
        <?php endwhile;?>  
    </ol>

    <h1>Lista de usuarios:</h1>
    <ul>
        <?php foreach ($usuarios as $usuario):?>
            <li><?= $usuario ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>