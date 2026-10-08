<?php
    include "functions/functionsMA.php";
    include "functions/shopMA.php";

    function joinValues($values, $separator = ", ")
    {
        $text = "";
        $isFirst = true;

        foreach ($values as $value)
        {
            if (!$isFirst)
            {
                $text .= $separator;
            }
            $text .= $value;
            $isFirst = false;
        }
        return $text;
    }

    function renderProductTable($productList)
    {
        echo '<table class="tabla-datos">';
        echo "<tr><th>Producto</th><th>Precio con IVA</th><th>Stock</th></tr>";

        foreach ($productList as $product)
        {
            $priceWithIva = calculateIVA($product["precio"]);

            echo "<tr>";
            echo "<td>" . ucfirst($product["nombre"]) . "</td>";

            echo "<td>";
            if (isset($product["descuento"]))
            {
                $discounted = $priceWithIva * (100 - $product["descuento"]) / 100;
                echo '<s class="precio-antiguo">' . formatPrice($priceWithIva) . "</s> ";
                echo "<strong>" . formatPrice($discounted) . "</strong>";
                echo '<span class="etiqueta-descuento">-' . $product["descuento"] . "%</span>";
            }
            else
            {
                echo formatPrice($priceWithIva);
            }
            echo "</td>";

            echo '<td class="' . getStockClass($product["stock"]) . '">' . $product["stock"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 1 - Introducción a PHP</title>
    <link rel="stylesheet" href="styles/styleMA.css">
</head>
<body>

    <h2>Ejercicio 1: Bucles anidados</h2>
    <?php
        $posicionNombre = 13;
        $posicionApellido = 1;

        $filas = $posicionNombre % 8 + 4;
        $columnas = $posicionApellido % 6 + 5;

        echo "<p>Filas: $filas · Columnas: $columnas</p>";
        echo '<div class="figuras">';

        echo '<div class="tarjeta"><h3>Rectángulo</h3><pre class="figura">';
        for ($fila = 0; $fila < $filas; $fila++)
        {
            for ($columna = 0; $columna < $columnas; $columna++)
            {
                echo "* ";
            }
            echo "\n";
        }
        echo "</pre></div>";

        echo '<div class="tarjeta"><h3>Marco</h3><pre class="figura">';
        for ($fila = 0; $fila < $filas; $fila++)
        {
            for ($columna = 0; $columna < $columnas; $columna++)
            {
                $esBorde = $fila === 0 || $fila === $filas - 1n
                        || $columna === 0 || $columna === $columas - 1;
                if ($esBorde)
                {
                    echo "* ";
                }
                else
                {
                    echo "  ";
                }
            }
            echo "\n";
        }
        echo "</pre></div>";

        echo '<div class="tarjeta"><h3>Tablero</h3><pre class="figura">';
        for ($fila = 0; $fila < $filas; $fila++)
        {
            for ($columna = 0; $columna < $columnas; $columna++)
            {
                if (($fila + $columna) % 2 === 0)
                {
                    echo "* ";
                }
                else
                {
                    echo "  ";
                }
            }
            echo "\n";
        }
        echo "</pre></div>";

        echo "</div>";
    ?>

    <h2>Ejercicio 2: Arrays bidimensionales</h2>
    <?php
        $ciudades = ["Madrid", "Sevilla", "Barcelona", "París", "Roma", "Berlín"];
        $numDias = 7;
        $diaFinDeSemana = 6;

        $temperaturas = [];
        foreach ($ciudades as $ciudad)
        {
            for ($dia = 1; $dia <= $numDias; $dia++)
            {
                $temperaturas[$ciudad][$dia] = random_int(-10, 45);
            }
        }

        $primeraCiudad = $ciudades[0];
        $minima = ["valor" => $temperaturas[$primeraCiudad][1], "ciudad" => $primeraCiudad, "dia" => 1];
        $maxima = $minima;

        $mediaPorCiudad = [];

        foreach ($temperaturas as $ciudad => $grados)
        {
            foreach ($grados as $dia => $valor)
            {
                if ($valor < $minima["valor"])
                {
                    $minima = ["valor" => $valor, "ciudad" => $ciudad, "dia" => $dia];
                }
                if ($valor > $maxima["valor"])
                {
                    $maxima = ["valor" => $valor, "ciudad" => $ciudad, "dia" => $dia];
                }
            }
            $mediaPorCiudad[$ciudad] = array_sum($grados) / count($grados);
        }

        $ciudadMasCalida = $primeraCiudad;
        foreach ($mediaPorCiudad as $ciudad => $media)
        {
            if ($media > $mediaPorCiudad[$ciudadMasCalida])
            {
                $ciudadMasCalida = $ciudad;
            }
        }

        $mayorVariacion = ["dia" => 0, "diferencia" => -1, "ciudadMax" => "", "ciudadMin" => ""];
        for ($dia = 1; $dia <= $numDias; $dia++)
        {
            $ciudadMax = $primeraCiudad;
            $ciudadMin = $primeraCiudad;

            foreach ($ciudades as $ciudad)
            {
                if ($temperaturas[$ciudad][$dia] > $temperaturas[$ciudadMax][$dia])
                {
                    $ciudadMax = $ciudad;
                }
                if ($temperaturas[$ciudad][$dia] < $temperaturas[$ciudadMin][$dia])
                {
                    $ciudadMin = $ciudad;
                }
            }

            $diferencia = $temperaturas[$ciudadMax][$dia] - $temperaturas[$ciudadMin][$dia];
            if ($diferencia > $mayorVariacion["diferencia"])
            {
                $mayorVariacion = [
                    "dia" => $dia,
                    "diferencia" => $diferencia,
                    "ciudadMax" => $ciudadMax,
                    "ciudadMin" => $ciudadMin
                ];
            }
        }

        echo '<table class="tabla-datos">';

        echo "<tr><th>Ciudad</th>";
        for ($dia = 1; $dia <= $numDias; $dia++)
        {
            if ($dia === $diaFinDeSemana)
            {
                echo '<th class="dia--finde">Día ' . $dia . "</th>";
            }
            else
            {
                echo "<th>Día $dia</th>";
            }
        }
        echo "<th>Media</th></tr>";

        foreach ($temperaturas as $ciudad => $grados)
        {
            $claseFila = "";
            if ($ciudad === $ciudadMasCalida)
            {
                $claseFila = "ciudad--calida";
            }

            echo "<tr>";
            echo '<td class="nombre-ciudad ' . $claseFila . '">' . $ciudad . "</td>";

            foreach ($grados as $dia => $valor)
            {
                $clases = $claseFila . " ";
                if ($valor < 0)
                {
                    $clases .= "temp--frio ";
                }
                if ($valor > 35)
                {
                    $clases .= "temp--calor ";
                }
                if ($valor === $minima["valor"])
                {
                    $clases .= "temp--min ";
                }
                if ($valor === $maxima["valor"])
                {
                    $clases .= "temp--max ";
                }
                if ($dia === $diaFinDeSemana)
                {
                    $clases .= "dia--finde ";
                }
                echo '<td class="' . $clases . '">' . $valor . "</td>";
            }

            echo '<td class="col-media ' . $claseFila . '">';
            echo number_format($mediaPorCiudad[$ciudad], 1, ",", ".") . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>

    <table class="tabla-resumen">
        <tr><th>Dato</th><th>Valor</th><th>Detalle</th></tr>
        <tr>
            <td>Temperatura mínima</td>
            <td><?= $minima["valor"] ?> °C</td>
            <td><?= $minima["ciudad"] ?> (día <?= $minima["dia"] ?>)</td>
        </tr>
        <tr>
            <td>Temperatura máxima</td>
            <td><?= $maxima["valor"] ?> °C</td>
            <td><?= $maxima["ciudad"] ?> (día <?= $maxima["dia"] ?>)</td>
        </tr>
        <tr>
            <td>Mayor variación térmica</td>
            <td><?= $mayorVariacion["diferencia"] ?> °C</td>
            <td>
                Día <?= $mayorVariacion["dia"] ?>:
                <?= $mayorVariacion["ciudadMax"] ?> (máx.) frente a
                <?= $mayorVariacion["ciudadMin"] ?> (mín.)
            </td>
        </tr>
    </table>

    <h2>Ejercicio 3: Funciones</h2>
    <?php
        $datos = [7, 3, 12, -4, 5, 3, 0, 11, -8, 2, 3, 9, 1];
        $tipos = [
            "even" => "Pares",
            "odd" => "Impares",
            "prime" => "Primos",
            "positive" => "Positivos",
            "negative" => "Negativos"
        ];

        echo '<div class="tarjeta"><h3>filterByType</h3>';
        echo '<ul class="lista-resultados">';
        echo "<li><strong>Datos:</strong> " . joinValues($datos) . "</li>";
        foreach ($tipos as $tipo => $etiqueta)
        {
            echo "<li><strong>$etiqueta:</strong> " . joinValues(filterByType($datos, $tipo)) . "</li>";
        }
        echo "</ul></div>";

        echo '<div class="tarjeta"><h3>calculateStatistics</h3>';
        echo '<ul class="lista-resultados">';
        foreach (calculateStatistics($datos) as $nombre => $valor)
        {
            echo "<li><strong>" . ucfirst($nombre) . ":</strong> " . number_format($valor, 2, ",", ".") . "</li>";
        }
        echo "</ul></div>";

        $frase = "El desarrollo web con PHP es muy divertido";
        $analisis = analyzeWords($frase);
        echo '<div class="tarjeta"><h3>analyzeWords</h3>';
        echo '<ul class="lista-resultados">';
        echo "<li><strong>Texto:</strong> $frase</li>";
        echo "<li><strong>Número de palabras:</strong> " . $analisis["number_of_words"] . "</li>";
        echo "<li><strong>Palabra más larga:</strong> " . $analisis["longest_word"] . "</li>";
        echo "<li><strong>Palabra más corta:</strong> " . $analisis["shortest_word"] . "</li>";
        echo "</ul></div>";

        $conversiones = [
            [0, "celsius", "kelvin"],
            [212, "fahrenheit", "celsius"],
            [300, "kelvin", "fahrenheit"],
            [50, "celsius", "rankine"]
        ];
        echo '<div class="tarjeta"><h3>convertTemperature</h3>';
        echo '<ul class="lista-resultados">';
        echo "<li><strong>100 (por defecto):</strong> " . number_format(convertTemperature(100), 2, ",", ".") . " fahrenheit</li>";
        foreach ($conversiones as $conversion)
        {
            $resultado = convertTemperature($conversion[0], $conversion[1], $conversion[2]);

            echo "<li><strong>" . $conversion[0] . " " . $conversion[1] . " → " . $conversion[2] . ":</strong> ";
            if ($resultado === false)
            {
                echo "unidad no válida (false)";
            }
            else
            {
                echo number_format($resultado, 2, ",", ".");
            }
            echo "</li>";
        }
        echo "</ul></div>";
    ?>
</body>
</html>
