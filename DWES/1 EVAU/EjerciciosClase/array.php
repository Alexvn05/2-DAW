<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h2>ARRAYS</h2>
    <?php
        $cars = array("Seat", "Audi", "BMW");
        $food = ["Tortilla", "Croquetas", "Jamon"];

        $food[] = "Cocido";

        /* CON FOR
        for ($i = 0; $i < count($food); $i++)
        {
            echo $food[$i].", ";
        }*/
        
        foreach ($food as $comida)
        {
            echo $comida.", ";
        }
    ?>
    <h2>Arrays Asociativos</h2>
    <?php
        $capitals = [
            "Ecuador" => "Quito",
            "España" => "Madrid",
            "Francia" => "Paris"
        ];
        
        echo "<p>La capital de Francia es ". $capitals['Francia'] . "</p>";
        // echo "<p>La capital de Francia es ". $capital[2] . "</p>"; ERROR

        echo count($capitals);
        echo "</br>";

        $capitals['Italia'] = "Roma";

        foreach ($capitals as $capital)
        {
            echo $capital." ";
        }

        echo "<h4>Mostrar clave mas valor</h4>";


        // RECORRER CLAVES Y VALORES
        foreach ($capitals as $pais => $capital)
        {
            echo "La capital de ".$pais." es ".$capital."<br>";
        }
        
        /*// ELIMINAR UN ELEMENTO DE UN ARRAY ASOCIATIVO
        unset($capitals['Ecuador']);
        // var_dump($capitals);

        //
        if (isset($capitals['España']))
        {
            echo "La capital de España es ".$capital['España']." <br>";
        }
        else
        {
            echo "No tengo la capital de España</br>";
        }*/
    ?>

    <h2>Funciones con arrays</h2>
    <?php
        $notas = [9.0, 6.9, 7.5, 8.2];

        // SUMA DE VALORES
        $suma = array_sum($notas);

        // LONGUITUD
        $numeroDeNotas = count($notas);
        $media = $suma / $numeroDeNotas;
        echo $media;

        // ORDENAR DE MENOR A MAYOR
        sort($notas);
        var_dump($notas);

        // ORDENAR DE MAYOR A MENOR
        rsort($notas);
        var_dump($notas);

        // REVOLVER
        shuffle($notas);
        var_dump($notas);

        // NOTA MAS ALTA
        sort($notas);
        echo "La nota mas alta es ".$notas[count($notas)-1] . "<br>";

        // BUSCAR
        var_dump(in_array(9.0, $notas));
        var_dump(in_array(9.01, $notas));

        // IMPLODE: SEPARA CADA ELEMENTO DEL ARRAY POR UN DELIMTADOR
        echo implode(", ", $notas);

        $nombres = "Juan#Alberto#Maria";
        $arrayNombres = explode("#", $nombres);
        var_dump($arrayNombres);

        //ARRAY ASOCIATIVO
        $p = [
            "Pedro" => "Presidente",
            "Pilar" => "Educacion",
            "Oscar" => "Transporte",
            "Fernando" => "Interior"
        ];
        var_dump($p);


        //sort($p); Si hago esto en un asociativo, 
        // elimino las claves y lo convierto en indexado
        var_dump($p);

        // POR VALOR ASCENDENTE
        asort($p);
        var_dump($p);

        // POR VALOR DESCENDENTE
        arsort($p);
        var_dump($p);

        // POR CLAVE ASCENDENTE
        ksort($p);
        var_dump($p);

        // POR CLAVE DESCENDENTE
        krsort($p);
        var_dump($p);

    // IMPRIMIR LAS CLAVES
        foreach ($p as $n => $m)
        {
            echo "$n<br>";
        }

        $claves = array_keys($p);
        var_dump($claves);
        echo implode(" - ", array_keys($p));

        // EN QUE POSICION ESTA UN ELEMENTO
        $resultado = array_search("Presidente", $p);
        var_dump($resultado);

        $resultado = array_search("dddd", $p);
        var_dump($resultado);

        
    ?>
</body>
</html>