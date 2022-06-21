<?php
    $n=1;
    $tabla=[];
    for ($x=1; $x <10 ; $x++){
        array_push($tabla,9*$x);
    }

    $tablad9=[];
    for ($x=1; $x <10 ; $x++){
        $resultado= 9*$x;
        array_push($tablad9,$resultado);
    }

    $tabladn=[];
    for ($x=1; $x <10 ; $x++){
        $resultado= 9*$x;
        $texto = "9 x $x = $resultado";
        array_push($tabladn, $texto);
    }

    $tabladel9=[];
    for ($x=1; $x <10 ; $x++){
        $dato=[];
        $resultado= 9*$x;
        $texto = "9 x $x";
        array_push($dato, $texto, $resultado);
        array_push($tabladel9, $dato);
    }
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>de NO a SI Refactorizando codigo</title>
</head>
<body>
    <h3>Tabla del 9</h3>
    <h1>NOOOOO</h1>
    <ul>
        <?php
            for ($i=0; $i <10 ; $i++) { 
                echo "<li>"."9 x 1 = ".(9*($i+1))."</li>";
            }
        ?>
    </ul>
    <h1>Tal vez</h1>
    <ol>
        <?php for ($i=0; $i <10 ; $i++): ?>
            <li>9 x <?= $i+1 ?>  = <?= (9*($i+1)) ?></li>
        <?php endfor; ?>
    </ol>
    <h1>Un poco mejor pero no tanto</h1>
    <ul>
        <?php for ($i=1; $i <=10 ; $i++): ?>
            <li>9 x <?= $i ?> = <?= (9*$i) ?></li>
        <?php endfor; ?>
    </ul>
    <h1>Mejor</h1>
    <ol>
        <?php foreach ($tabla as $value):?>
            <li>9 x <?= $n ?> = <?= $value; $n++;?></li>
        <?php endforeach;?>
    </ol>
    <h1>Un poco mejor</h1>
    <ul>
        <?php foreach ($tablad9 as $index => $value):?>
            <li>9 x <?= $index + 1 ?> = <?= $value; $n++;?></li>
        <?php endforeach;?>
    </ul>
    <h1>Mucho Mejor</h1>
    <ol>
        <?php foreach ($tabladn as $value):?>
            <li><?= $value?></li>
        <?php endforeach;?>
    </ol>
    <h1>Perfecto</h1>
    <ul>
        <?php foreach ($tabladel9 as $index => $value):?>
            <li><?= $tabladel9[$index][0]?> = <?= $tabladel9[$index][1]?></li>
            <li><?= print_r( $tabladel9[$index][0])?> = <?= print($tabladel9[$index][1])?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>

<!-- Porque sale el 1 con el print_r -->