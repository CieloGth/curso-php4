<?php
    $se_hablo_de_bruno= false;
    //$se_hablo_de_bruno= true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <!-- Esto no se debe hacer -->
    <?php 
        if(true){
            echo"<p>Esta condicion es verdadera</p>";
        }
        if($se_hablo_de_bruno){
            echo"<b>-(°_o)/¯ </b>";
        } else{
            echo"<b>٩(●̮̮̃•̃)۶</b>";
        }
    ?>
    <!-- Esto SI se puede hacer -->
    <?php if($se_hablo_de_bruno){ ?>
            <b>-(°_o)/¯ </b>
    <?php } else{ ?>
            <b>٩(●̮̮̃•̃)۶</b>
    <?php    } ?>
    <!-- Esto SI se deber hacer -->
    <?php if($se_hablo_de_bruno): ?>
            <b>-(°_o)/¯ </b>
    <?php else: ?>
            <b>٩(●̮̮̃•̃)۶</b>
    <?php endif; ?>
</body>
</html>