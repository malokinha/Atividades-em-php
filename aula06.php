<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Aula 06 php</title>
</head>
<body>
    <?php 
    echo "<h1>Arrays - Vetores</h1>";
    $carros = array('Fiesta','palio','corsa','siena');
    echo $carros[1], "<br>";
    echo $carros[3], "<br>";
    //Adicionando novos elementos 
   $carros[4] = "Clío";
   $carros[11] = "Versa";
   $carros[ ] = "Sandero";
   echo $carros[4] , "<br>"; //Resultado Clío
   echo $carros[5] , "<br>"; //Sem Resultado 
   echo $carros[11] , "<br>"; //Resultado varsa 
   echo $carros[12] , "<br>"; //Resultados Sandero 

   $carros["s1"] = "Siena"; //Usando string como indice 
   echo $carros["s1"] , "<br>"; //Reesutado Siena 
   echo $carros[13], "<br>";
   $carros[13] = "Ferrari";
   echo $carros[13], "<br>";
   $carros [5] = "Fusca";

   echo"<h1>Impressão completa da Array</h1>";

   echo "</pre>"; 
   print_r($carros);
   echo"<pre>";

   echo "<pre>";
   var_dump($carros);
   echo "</pres>";
   

    ?>
</body>
</html>