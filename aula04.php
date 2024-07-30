<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 03</title>
    <style>
        table{
            border-collapse:collapse;
        }
        td{
            border: 1px solid black;
        }
        img{
            width: 250px;
        }
        body{
            background-color: #cc0099;
        }
    </style>
</head>
<body>
    <?php 
    echo "<h1>galeria de fotos</h1>";
    echo"<table><tr>";
    for($x=1; $x<=5; $x++){
    echo"<td><img src='img/divertidamente$x.jpeg'></td>";
    }
    echo "</tr>";
    echo "<tr>";
    for($x=6; $x<=10; $x++){
        echo"<td><img src='img/divertidamente$x.jpeg'></td>";
        }
    echo "</tr></table>";


    echo "<h1>Tabela de 1 a10 em PHP</h1>";
    echo"<table><tr>";
    for($x=1; $x<=10; $x++){
        echo"<td>$x</td>";
    }
    echo "</tr></table>";


    ?>

</body>
</html>