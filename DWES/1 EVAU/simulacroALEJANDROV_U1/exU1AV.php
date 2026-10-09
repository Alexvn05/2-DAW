<?php
    include 'functions/functionsAV.php';
    include 'employees.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>1- ARRAY BIDIMENSIONAL</h2>
    <?php
        $parImpar = [];
        for ($i = 0; $i < 4; $i++)
        {
            for ($j = 0; $j < 5; $j++)
            {

                $r = (($i+1) + ($j+1)) % 2 == 0 ? "par" : "impar";
                $parImpar[$i][$j] = $r;
                
            }
        }
        foreach ($parImpar as $fila)
        {
            echo implode(", ",$fila)."<br>";
        }

      
    ?>
    <h2>Funcion</h2>
    <?php
        var_dump(basicStatistics(2,9,10,4,8,9,-7,-2));
    ?>
    
    <h2>Lista no ordenada</h2>
    <?php
        $nums = basicStatistics(1, 2, 3, -2, 9, -3);
        echo "<ul>";
        foreach ($nums as $clave => $valor)
        {
            echo "<li>";
                if (is_array($valor))
                {
                    echo $clave.": ".implode(", ",$valor);
                }
                else
                {
                    
                    echo $clave.": ".$valor;
                    
                }
            echo "</li>";
        }
        echo "</ul>";
    ?>
    <h2>Ejercicio 3</h2>
    <?php
        var_dump(operations([15, 6, 8.3, 4]));
        var_dump(operations([15, 6, 8.3, 4], "order", false));
        var_dump(operations([15, 6, 8.3, 4], "sum"));
        var_dump(operations([15, 6, 8.3, 4], "product"));
    ?>
    

    <h3>4- Empleados</h3>
    <?php
        echo "<ol>";
        foreach ($employees as $clave)
        {
            if ($clave["department"] == "Sales")
            {
                echo "<li>".$clave["name"]." - ".$clave["salary"];
            }
        }
        echo "</ol>";
        echo "<br>";
        $sumaIT = 0;
        $contIT = 0;

        $sumaSales = 0;
        $contSales = 0;
        foreach ($employees as $clave)
        {
            if ($clave["department"] == "IT")
            {
                $sumaIT += $clave["salary"];
                $contIT++;
            }
            else
            {
                $sumaSales += $clave["salary"];
                $contSales++;
            }
            
        }
        echo "<p>El salario medio de IT es ".($sumaIT/$contIT)."</p>";
        echo "<p>El salario medio de Sales es ".($sumaSales/$contSales)."</p>";

        
        $nombre = [];
        foreach ($employees as $tipo) 
        {
            $nombre = $tipo["name"];
        }
        sort($nombre);
        echo "<ul>";
        foreach ($nombre as $n)
        {
            echo "<li>".$n."</li>";
        }
        echo "</ul>";
    ?>

</body>
</html>