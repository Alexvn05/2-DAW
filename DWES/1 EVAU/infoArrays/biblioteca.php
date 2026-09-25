<?php
    include "usoBiblioteca.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h2>1</h2>
    <?php
        echo $biblioteca["Ciencia Ficción"][1]["titulo"];
    ?>
    <h2>2</h2>
    <?php
        echo $biblioteca["Historia"][0]["autores"][0];
    ?>
    <h2>3</h2>
    <?php
        echo $biblioteca["Ciencia Ficción"][0]["ejemplares"]["Norte"];
    ?>
    <h2>4</h2>
    <?php
        echo $biblioteca["Historia"][0]["resenas"][1]["comentario"];
    ?>
    <h2>5</h2>
    <?php
        if (isset($biblioteca["Ciencia Ficción"][1]["resenas"]))
        {
            echo "Tiene reseñas";
        }
        else
        {
            echo "No tiene reseñas";

        }
    ?>
    <h2>6</h2>
    <?php
        if (isset($biblioteca["Poesía"][0]["ejemplares"]))
        {
            echo "Tiene ejemplares";
        }
        else
        {
            $biblioteca["Poesía"][0]["ejemplares"] = ["Central" => 0];
            echo $biblioteca["Poesía"][0]["ejemplares"]["Central"];

        }
    ?>
    <h2>7</h2>
    <?php
        $biblioteca["Ciencia Ficción"][1]["anio"] = 1985;
        echo $biblioteca["Ciencia Ficción"][1]["anio"];
    ?>
    <h2>8</h2>
    <?php
        foreach ($biblioteca as $categoria => $libro) 
        {
            foreach ($libro as $info) 
            {
                echo $categoria." -> ".$info["titulo"]."<br>";
            }
        }
    ?>
    <h2>9</h2>
    <?php
        foreach ($biblioteca as $categoria => $libro)
        {
            foreach ($libro as $info) 
            {
                if ($info["anio"] < 1980)
                {
                    echo $categoria." - ".$info["titulo"]."<br>";
                }
            }
        }
    ?>
    <h2>10</h2>
    <?php
        foreach ($biblioteca as $categoria => $libro) 
        {
            foreach ($libro as $info) 
            {
                if (isset($info["ejemplares"]) && array_sum($info["ejemplares"]) > 0)
                {
                    $total = array_sum($info["ejemplares"]);
                    echo $info["titulo"].": ".$total." ejemplares en total<br>";
                }
            }
        }
    ?>
    <h2>11</h2>
    <?php
        foreach ($biblioteca as $categoria => $libro) 
        {
            foreach ($libro as $info) 
            {
                foreach ($info["ejemplares"] as $zona => $cantidad) 
                {
                    if (isset($info["ejemplares"]) && $zona == 0)
                    {
                        echo $info["titulo"]." no tiene ejemplares en ".$zona."<br>";
                    }
                }
            }
        }
    ?>
    <h2>12</h2>
    <?php
        
    ?>
    <h2>13</h2>
    <?php
        
    ?>
    <h2>14</h2>
    <?php
        
    ?>
</body>
</html>