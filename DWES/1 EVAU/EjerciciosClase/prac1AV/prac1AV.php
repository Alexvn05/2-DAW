<?php
    include "functions/functionsAV.php";
    include "functions/shopAV.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styleAV.css">
</head>
<body>
    <h2>1- Bucles anidados</h2>
    <p>1</p>
    <?php
        $rows = (1 % 8)+4;
        $cols = (23 % 6)+5;

        for ($i=0; $i < $rows; $i++)
        {
            for ($j=0; $j < $cols; $j++)
            {
                echo " *";
            }
            echo "<br>";
        }
        echo "<br>";
    ?>
    <p>2</p>
    <?php
    //&nbsp;
        for ($i=0; $i < $rows; $i++)
        {
            for ($j=0; $j < $cols; $j++)
            {
                if ($i > 0 && $i < ($rows -1) )
                {
                    if ($j == 0 || $j == ($cols -1))
                    {
                        echo "*&nbsp;";
                    }
                    else
                    {
                        echo '&nbsp;&nbsp;&nbsp;';
                    }
                }
                else
                {
                    echo " *";
                }
            }
            echo "<br>";
        }
    ?>
    <p>3</p>
    <?php
        for ($i=1; $i <= $rows; $i++)
        {
            for ($j=1; $j <= $cols; $j++)
            {
                if ($i % 2 != 0 && $j % 2!= 0)
                {
                    echo "*&nbsp;";
                }
                if ($i % 2 == 0 && $j % 2 == 0)
                {
                    echo "&nbsp;*";
                }
                echo '&nbsp;&nbsp;';

            }
            echo "<br>";
        }
        echo "<br>";
    ?>
    <h2>2-  Arrays bidimensionales</h2>
    <?php
        $temperatura = [];
        $ciudades = ["Madrid", "Sevilla", "Barcelona", "Paris", "Roma", "Berlin"];

        // CREO EL ARRAY
        for ($i = 0; $i < count($ciudades); $i++) // FILAS CIUDADES
        {
                for ($j = 0; $j < 6; $j++) // COLUMNAS DIAS
                {
                    $random = random_int(-10, 45);

                    $temperatura["Dia ".($j+1)][$ciudades[$i]] = $random;
                }
        }
        echo "<pre>";
        var_dump($temperatura);
        echo "</pre>";

        // • La temperatura más baja y más alta
        // GUARDO EL NOMBRE Y EL DIA PARA UN FUTURO
        $tBaja = $temperatura["Dia 1"]["Madrid"];
        $ciudadTBaja = "Madrid";
        $diaTBaja = "Dia 1";

        $tAlta = $temperatura["Dia 1"]["Madrid"];
        $ciudadTAlta = "Madrid";
        $diaTAlta = "Dia 1";

        // • El día con mayor variación térmica
        $varTermica = [];


        // • La temperatura media por ciudad
        $tempMediaCiudad = [];
        foreach ($ciudades as $c)
        {
            $tempMediaCiudad[$c] = 0;
        }

        foreach ($temperatura as $dia => $ciudad)
        {
            $primero = true;

            // $tMinDia = $ciudad[$nombre]; 
            // $tMaxDia = $ciudad[$nombre];

            foreach ($ciudad as $nombre => $temp)
            {
                if ($primero)
                {
                    $tMaxDia = $temp;
                    $tMinDia = $temp;
                    $primero = false;
                }

                if ($temp > $tAlta)
                {
                    $tAlta = $temp;
                    $ciudadTAlta = $nombre;
                    $diaTAlta = $dia;
                }
                else if ($temp < $tBaja)
                {
                    $tBaja = $temp;
                    $ciudadTBaja = $nombre;
                    $diaTBaja = $dia;
                }
                $tempMediaCiudad[$nombre] += number_format($temp / 6, 2);

                if ($temp > $tMaxDia)
                {
                    $tMaxDia = $temp;
                }
                else if ($temp < $tMinDia)
                {
                    $tMinDia = $temp;
                }
            }
            $varTermica[$dia] = $tMaxDia - $tMinDia;

        }
        echo "<pre>";
        var_dump($varTermica);
        var_dump($tempMediaCiudad);
        echo "</pre>";
        


        // GUARDO LA CIUDAD PARA UN FUTURO

        $varMax = $varTermica["Dia 1"]; // MAXIMA DIFERENCIA ENTRE TEMPERATURA
        $diaVarMax = "Dia 1"; 
        $ciuVarMax = "Madrid";


        foreach ($varTermica as $dia => $var)
        {
            if ($var > $varMax)
            {
                $varMax = $var;
                $diaVarMax = $dia;
                $ciuVarMax = $nombre;
            }
            
        }

        echo "La temperatura mas alta es: ".$tAlta;
        echo "<br>La temperatura mas baja es: ".$tBaja;
        echo "<br>El dia con mayor variacion termica es ".$diaVarMax;
        echo "<br>La temperatura media por ciudad es <br><ul>";

            foreach ($tempMediaCiudad as $ciudad => $valor)
            {
                echo "<li>".$ciudad." - ".$valor."</li><br>";
            }
            echo "</ul>";

        // AÑADO EL ARRAY DE $tempMediaCiudad AL ARRAY DE $temperatura
        $temperatura["Media"] = $tempMediaCiudad;
        // var_dump($temperatura);
    ?>
    <h3>Tabla</h3>
    <div class="div-temperatura">
    <p class="p-Tabla">Temperaturas de ciudades por día (°C)</p>
    <?php
        // CREO UN ARRAY PARA VER LA CIUDAD CON LA MEDIA MAS ALTA
        $tMediaAlta = $temperatura["Media"]["Madrid"];
        $nombreCiu = "Madrid";
        foreach ($temperatura["Media"] as $ciu => $tem)
        {
            if ($tMediaAlta < $tem)
            {
                $tMediaAlta = $tem;
                $nombreCiu = $ciu;
            }
        }

        echo '<div class="div-table"><table>';
            echo "<tr><th>Ciudades/Dia</th>";
                foreach ($temperatura as $dia => $ciudad)
                {
                    echo '<th class="';
                        if ($dia == "Dia 6") {echo "t-verde";}
                    echo '">'.$dia.'</th>';
                }
            echo "</tr>";
            foreach ($ciudades as $ciudad)
            {
                echo "<tr>";
                    echo '<td class="td-ciudad">';
                        echo $ciudad;
                    echo "</td>";

                    foreach ($temperatura as $dia => $valor)
                    {
                        $temp = $valor[$ciudad];
                        echo '<td class="';
                            if ($temp > 35) {echo 't-rojo ';}
                            else if ($temp < 0) {echo 't-azul ';}
                            if ($dia == "Dia 6") {echo 't-verde ';}
                            if ($tBaja == $temp) {echo 't-baja ';}
                            if ($tAlta == $temp) {echo 't-alta ';}
                            if ($nombreCiu == $ciudad) {echo 't-mediaAlta ';}
                            if ($dia == "Media") {echo 't-media';}
                        echo '">'.$temp."</td>";
                    }
                echo "</tr>";
            }
        echo "</table></div>";
    ?>
    <br>
        <div class="div-stats">
            <p class="p-stats">Estadisticas</p>
            <p><span>Temperatura minima: </span>
                <?=
                    $tBaja."ºC (".$diaTBaja.", ".$ciudadTBaja.")";
                ?>
            </p>
            <p><span>Temperatura maxima: </span>
                <?=
                    $tAlta."ºC (".$diaTAlta.", ".$ciudadTAlta.")";
                ?>
            </p>
            <p><span>Dia con mayor variacion: </span>
                <?=
                    $diaVarMax. " (".$varMax."ºC de diferencia)";
                ?>
            </p>
        </div>
    
    </div>

    <h2>3- Funciones</h2>
    <?php
        $num = [1,1,3, 5, 7, 9, 9, 9, 4, 8, 2];
        echo "<pre>";
        var_dump($num);
        var_dump(filterByType($num, "prime"));
        echo "</pre>";


        sort($num);
        echo "<pre>";
        var_dump($num);
        var_dump(calculateStatistic($num));
        echo "</pre>";
        

        $texto = "Hola me, llamo Alejandro";
        echo "<pre>";
        var_dump(analyzeWords($texto));
        var_dump(convertTemperature(100));
        echo "</pre>";
        
    ?>

    <h2>4- ARRAYS ASOCIATIVOS </h2>
    <?php
    // PRIMERA TABLA
        echo "<table>";
            echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Precio con IVA</th>";
                echo "<th>Stock</th>";
            echo "</tr>";
            foreach ($productos as $producto)
            {
                echo "<tr>";
                    echo "<td>".ucfirst($producto["nombre"])."</td>";
                    echo "<td>".formatPrice(calculateIVA($producto["precio"]))."</td>";
                    echo '<td class="';
                        if ($producto["stock"] > 10) {echo 'stock-verde';}
                        else if ($producto["stock"] > 0) {echo 'stock-amarillo';}
                        else if ($producto["stock"] == 0) {echo 'stock-rojo';}
                    echo '">'.$producto["stock"]."</td>";
                echo "</tr>";
            }
        echo "</table>";
                
    ?>
    <?php
    // SEGUNDA TABLA
        $productosConDescuento = $productos;
        foreach ($productosConDescuento as $key => $value) 
        {
            if ($value["precio"] > 100)
            {
                $productosConDescuento[$key]["descuento"] = 10;
                
            }
        }
        echo "<pre>";
        var_dump($productosConDescuento);
        echo "</pre>";

        echo "<table>";
            echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Precio con IVA</th>";
                echo "<th>Stock</th>";
            echo "</tr>";
            foreach ($productosConDescuento as $producto)
            {
                echo "<tr>";
                    echo "<td>".ucfirst($producto["nombre"])."</td>";
                    echo "<td>";
                        if (isset($producto["descuento"]))
                        {   
                            echo "<s>".formatPrice(calculateIVA($producto["precio"]))."</s> - ";
                            echo formatPrice(calculateIVA($producto["precio"])*((100 - $producto["descuento"])/100));
                        }
                        else
                        {
                            echo formatPrice(calculateIVA($producto["precio"]));
                        }
                        echo "</td>";
                    echo '<td class="';
                        if ($producto["stock"] > 10) {echo 'stock-verde';}
                        else if ($producto["stock"] > 0) {echo 'stock-amarillo';}
                        else if ($producto["stock"] == 0) {echo 'stock-rojo';}
                    echo '">'.$producto["stock"]."</td>";
                echo "</tr>";
            }
        echo "</table>";
                
    ?>
</body>
</html>