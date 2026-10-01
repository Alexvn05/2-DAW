<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link rel="stylesheet" href="ejercicio.css">
</head>
<body>
    <h1>1 - Tabla de multiplicar</h1>
    <table>
        <tr>
            <th>a</th>
            <th>b</th>
            <th>resultado</th>
        </tr>
        <?php
            $n = 7;
            for ($i=0; $i <= 10; $i++) 
            {   echo "<tr>";
                $r = $n * $i;
                echo "<td>".$n."</td>";
                echo "<td>".$i."</td>";
                echo "<td>".$r."</td>";
                echo "</tr>";

            }
        ?>
    </table>
    <h1>2 - Secuencia fibonacci</h1>
    <?php
        $s1 = 0;
        $s2 = 1;
        $finobacci = [$s1, $s2];
        
        for ($i=0; $i <18 ; $i++) 
        { 
            $r = $s1 + $s2;

            $finobacci[] = $r; 
            $s1 = $s2;
            $s2 = $r;
            
        }
        echo implode(", ",$finobacci);
    ?>
    <h1>3- Variables en columnas y filas</h1>
    <?php
        $columna = 7;
        $fila = 5;
        
        for ($i = 0; $i < $fila; $i++)
        {
            for ($j = 0; $j < $columna; $j++)
            {
                echo " *";
            }
            echo "<br>";
        }
    ?>
    <h1>4- Piramide de variables</h1>
    <?php
        $n = 6;
        for ($i = 1; $i <= $n; $i++)
        {
            for ($j = 1; $j <= $i; $j++)
            {
                echo " ".$j;
            }
            echo "<br>";
        }
    ?>
    <h1>5- Tablas de multiplicar</h1>
    <table>
        <thead>
            <tr>
                <th class="x">X</th>
                <?php
                    
                    for ($i = 0; $i < 10; $i++)
                    {
                        echo '<th class="cabecera">';
                        echo $i;
                        echo "</th>";
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($i = 0; $i < 10; $i++)
                {
                    echo "<tr>";
                        echo '<td class="columna">'.$i."</td>";

                        for ($j = 0; $j < 10; $j++)
                        {
                            echo "<td>".$j * $i."</td>";
                        }
                    echo "</tr>";

                }
            ?>
        </tbody>
    </table>
    <h1>6- Random</h1>
    <?php
        $array = [];
        for ($i = 0; $i < 20; $i++)
        {
            $array[] = random_int(1, 50);
        }
        // ARRAY
        echo var_dump($array);
        // SUMA DE TODO
        echo "La suma de todo es: ".array_sum($array);
        // MEDIA
        echo "<br>";
        $media = array_sum($array) / count($array);
        echo "La media es: ".$media."<br>";
        sort($array);
        echo "El numero mas alto: ".$array[count($array)-1]."<br>";
        rsort($array);
        echo "El numero mas bajo: ".$array[count($array)-1];
    ?>
    <h1>7 - </h1>
    <?php
        $students = [
            ["nombre" => "Ana García", "matematicas" => 8.5, "historia" => 7.0, "programacion" => 9.0],
            ["nombre" => "Luis Martínez", "matematicas" => 6.0, "historia" => 8.5, "programacion" => 7.5],
            ["nombre" => "Marta Rodríguez", "matematicas" => 9.0, "historia" => 6.5, "programacion" => 8.0],
            ["nombre" => "Carlos López", "matematicas" => 7.5, "historia" => 9.0, "programacion" => 6.5],
            ["nombre" => "Elena Torres", "matematicas" => 8.0, "historia" => 7.5, "programacion" => 9.5]
        ]; 
    ?>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Matematicas</th>
                <th>Historia</th>
                <th>Programacion</th>
                <th>Promedio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($students as $student) :
                    
            ?>
                <tr>
                    <td>
                        <?php echo $student['nombre']; ?>
                    </td>
                    <td class="
                        <?php
                            if ($student['matematicas'] >= 8)
                            {
                                echo "green";
                            }
                            else
                            {
                                echo '""';
                            }
                        ?>
                        <?=
                           $student['matematicas'] >= 9 ? "negrita" : '""';
                        ?>
                    ">
                        <?= $student['matematicas']; ?> <!-- Otra forma pero quitando el php y el echo y poniendo un =-->
                    </td>
                    <td class="
                        <?=
                           $student['historia'] >= 8 ? "green" : '""';
                        ?>
                        <?=
                           $student['historia'] >= 9 ? "negrita" : '""';

                        ?>
                    ">
                        <?= $student['historia']; ?> 
                    </td>
                    <td class="
                        <?=
                           $student['programacion'] >= 8 ? "green" : '""';
                        ?>
                        <?=
                           $student['programacion'] >= 9 ? "negrita" : '""';
                        ?>
                    ">
                        <?= $student['programacion']; ?> 
                    </td>
                </tr>

            <?php
                endforeach;
            ?>
        </tbody>
    </table>


</body>
</html>