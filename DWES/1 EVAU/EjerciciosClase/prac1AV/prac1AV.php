<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="prac1AV.css">
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
        var_dump($temperatura);

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

        foreach ($temperatura as $dia => $ciudad)
        {
            $tMinDia = 0;
            $tMaxDia = 0;

            foreach ($ciudad as $nombre => $temp)
            {
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
            $varTermica[$dia][$nombre] = $tMaxDia - $tMinDia;

        }
        var_dump($varTermica);
        var_dump($tempMediaCiudad);


        // GUARDO LA CIUDAD PARA UN FUTURO

        $varMax = $varTermica["Dia 1"]["Madrid"]; // MAXIMA DIFERENCIA ENTRE TEMPERATURA
        $diaVarMax = "Dia 1"; 
        $ciuVarMax = "Madrid";


        foreach ($varTermica as $dia => $ciudad)
        {
            foreach ($ciudad as $nombre => $var)
            {
                if ($var > $varMax)
                {
                    $varMax = $var;
                    $diaVarMax = $dia;
                    $ciuVarMax = $nombre;
                }
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

        echo '<table border = "1">';
            echo "<caption>Temperaturas de ciudades por día (°C)</caption>";
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
                        else if ($temp < 0) {echo 't-blue ';}
                        if ($dia == "Dia 6") {echo 't-verde ';}
                        if ($tBaja == $temp) {echo 't-baja ';}
                        if ($tAlta == $temp) {echo 't-alta ';}
                        if ($nombreCiu == $ciudad) {echo 't-mediaAlta ';}

                        echo '">'.$temp."</td>";
                            /*
                        if ($temp > 35)
                        {
                            
                        }
                        else if ($temp < 0)
                        {
                            echo '<td class="t-azul">';
                                echo $temp;
                            echo "</td>";
                        }
                        else if ($dia == "Dia 6")
                        {
                            echo '<td class="t-verde">';
                                echo $temp;
                            echo "</td>";
                        }
                        else
                        {
                            echo '<td>';
                                echo $temp;
                            echo "</td>";
                        }*/

                    }
                echo "</tr>";
            }
        echo "</table>";
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
                    $diaVarMax.", ".$ciuVarMax. " (".$varMax."ºC de diferencia)";
                ?>
            </p>
        </div>
    
    </div>


    <?php
        /*
        echo '<table border = "1"';
        echo "<tr><th>Ciudades</th>";
            for ($i = 1; $i<7; $i++)
            {
                echo "<th>Dia ".$i."</th>";
            }
        echo "</tr>";

        for ($i = 0; $i < count($ciudades); $i++)
        {
            $suma = 0;
            $total = 0;
            $tmin = 100;
            $tmax = -100;

            echo "<tr>";
                echo "<td>".$ciudades[$i]."</td>";
                for ($j = 0; $j < 6; $j++)
                {
                    $random = random_int(-10, 45);

                    $temperatura["Dia ".($j+1)][$ciudades[$i]] = $random;
                    if ($random < 0)
                    {
                        echo '<td class="t-azul">'.$random.'</td>';
                    }
                    else if ($random > 35)
                    {
                        echo '<td class="t-rojo">'.$random.'</td>';

                    }
                    else
                    {
                        echo '<td>'.$random.'</td>';
                    }

                    $suma += $random;
                }
            $total = $suma / 6;
            $tempMedia[$ciudades[$i]] = $total;
            echo "</tr>";
        }

        echo "</table>";
        var_dump($temperatura);
    ?>
    <?php
        $min = 50;
        $max = -50;

        $var;
        $varActual;
        $varMax = 0;



        foreach ($temperatura as $dia => $ciudad)
        {
            foreach ($ciudad as $temp)
            {
                $tem = $temp;
                if ($tem < $min)
                {
                    $min = $tem;
                }
                else if ($tem > $max)
                {
                    $max = $tem;
                }
            }
            $varActual = $min - $max;
            if ($varActual < $varMax)
            {
                $varMax = $varActual;
                $var = $dia;
            }
        }

        echo "<p>La temperatura mas baja es: ".$min."</p>";
        echo "<p>La temperatura mas alta es: ".$max."</p>";
        echo "<p>El dia con mas variacion termica es: ".$dia."</p>";
        echo "<p>La temperatura media por ciudad es: <ul>";
            foreach ($tempMedia as $ciudad => $temp)
            {
                echo "<li>".$ciudad.": ".number_format($temp, 2)."</li>";
            }
        echo "</ul></p>";
    */?>

</body>
</html>