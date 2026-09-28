<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <h1>1 - Tabla de multiplicar</h1>
    <table border="1">
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
        $finobacci = [0, 1];
        for ($i=0; $i <=20 ; $i++) 
        { 
            $finobacci[] = ; 
        }
        echo implode(", ",$finobacci);
    ?>

</body>
</html>