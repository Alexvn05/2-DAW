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
        $tBaja = $temperatura["Dia 1"]["Madrid"];
        $tAlta = $temperatura["Dia 1"]["Madrid"];
        
        // • El día con mayor variación térmica
        $varTer = $temperatura["Dia 1"]; 
        $varterDia;
        $varTermica = [];

        // • La temperatura media por ciudad
        $tempMediaCiudad = [];
        
        foreach ($temperatura as $dia => $ciudades)
        {
            foreach ($ciudades as $ciudad => $temp) 
            {
                if ($temp > $tAlta)
                {
                    $tAlta = $temp;
                }
                else if ($temp < $tBaja)
                {
                    $tBaja = $temp;
                }
                $tempMediaCiudad[$ciudad] += number_format($temp / 6, 2); 
                $varTermica[$dia] +=  number_format($temp / count($ciudades), 2);
                
            }
            
        }

        foreach ($varTermica as $dia => $var)
        {
            if ($varT)
        }
        var_dump($varTermica);

        echo "La temperatura mas alta es: ".$tAlta;
        echo "<br>La temperatura mas baja es: ".$tBaja;
        echo "<br>El dia con mayor variacion termica es ".$varTer;


        // $temperatura["Media"][$ciudad] = 

        
        
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