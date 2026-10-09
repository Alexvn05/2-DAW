<?php
    include "functions/functionsAV.php";
    include "data/products.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>EJERCICIO 1</h2>
    <?php
        $grid = [];
        for ($i = 0; $i < 5; $i++)
        {
            for ($j = 0; $j < 5; $j++)
            {
                if ($i == $j)
                {
                    $grid[$i][$j] = " D"; 
                }
                else if ($j > $i)
                {
                    $grid[$i][$j] = " A"; 
                }
                else
                {
                    $grid[$i][$j] = " B"; 
                }
            }
        }
        foreach ($grid as $gr)
        {
            echo implode(",",$gr)."<br>";
        }

        // var_dump($grid);
    ?>
    <table border="1">
    <?php
        foreach ($grid as $fila)
        {
            echo "<tr>";

            foreach ($fila as $columna) 
            {
                echo "<td>".$columna."</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>

    <h2>EJERCICIO 2</h2>
    <?php
        $texto = textStats("PHP", "server", "Laravel", "web", "arrays", "Madrid");
        // var_dump($texto);
        echo "<ul>";
        foreach ($texto as $nombre => $t)
        {
            echo "<li>".$nombre." = ".$t."</li>";
        }
        echo "</ul>";

        echo "<p>".(textStats() ? textStats() : "No has introducido palabras")."</p>";
    ?>
    <h2>EJERCICIO 3</h2>
    <?php
        $num = [7, -4, 12, 0, -9, 3, 8];
        var_dump(filterNumbers($num));
        var_dump(filterNumbers($num, "odd"));
        var_dump(filterNumbers($num, "positive"));

        var_dump(filterNumbers($num, "even", 2));
        var_dump(filterNumbers($num, "odd", 10));
        var_dump(filterNumbers($num, "prime"));
    ?>
    <h2>EJERCICIO 4</h2>
    <?php
        echo "<ol>";
        foreach ($products as $prod)
        {   
            if ($prod["stock"] < 5)
            {
                echo "<li>".$prod["name"]." - ".$prod["price"]."€ (stock: ".$prod["stock"].")</li>";
            }
        }
        echo "</ol>";
        // var_dump($products);

        $contCategorias = [];
        foreach ($products as $prod)
        {
            $contCategorias[$prod["category"]] += $prod["price"]* $prod["stock"];
        }
        // var_dump($contCategorias);
        foreach ($contCategorias as $categoria => $valor)
        {
            echo "<p>El valor del inventario de ".$categoria." es ".$valor." €</p>";
        }

        
        $ordenado = [];
        foreach ($products as $prod)
        {   
            if ($prod["category"] == "Electronics")
            {
                $ordenado[$prod["name"]] = $prod["price"];
                // echo "<li>".$prod["name"]." - ".$prod["price"]."€ (stock: ".$prod["stock"].")</li>";
            }
        }
        echo "<ul>";
        ksort($ordenado);
        // var_dump($ordenado);
        foreach ($ordenado as $ord => $valor)
        {   
            echo "<li>".$ord." (".$valor."€)";
        }

        echo "</ul>";
    ?>
</body>
</html>