<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conduciones y bucles</title>
</head>
<body>
    <h2>CONDICIONES</h2>
    <?php
        // Si la edad es menor de 18 muestre q eres menos de edad y si no mayor de edad
        $edad = 15;
        if ($edad >= 18)
        {
            echo "Tienes ". $edad .", eres mayor de edad";
        }
        else if ($edad >= 15 && $edad <= 18)
        {
            echo "Tienes ".$edad." pero eres muy madura para tu edad";
        }
        else
        {
            echo "Tienes ". $edad .", eres menor de edad";
        }

        // TERNARIO
        $mensaje = $edad >= 18 ? "Eres mayor de edad":"Eres menor de edad";
        echo("</br>".$mensaje."</br>");
        echo ($edad >=18)?"Eres mayor de edad":"Eres menor de edad";

        // SWITCH: SI DIA 1 LUNES, DIA 2 MARTES, DIA 3 MIERCOLES, OTRO NUMERO OTROS
        $dia = 3;
        $dia2;
        switch ($dia)
        {
            case 1: 
                $dia2 = "Lunes";
                break;
            case 2: 
                $dia2 = "Martes";
                break;
            case 3: 
                $dia2 = "Miercoles";
                break;       
            default: 
                $dia2 = "Otros";
        }
        echo ("</br>".$dia2);

        // MATCH 
        $dia = 5;
        $nombre = match($dia) {
            1 => "Lunes",
            2 => "Martes",
            3 => "Miércoles",
            4 => "Jueves",
            5 => "Viernes",
            6, 7 => "Fin de semana",  // varios valores en un mismo caso
            default => "Día no válido"
        };

        echo "</br>".$nombre;
    ?>
    <h2>BUCLES</h2>
    <?php
        // BUCLE IMRPIMIR NUMERO DEL 1 AL 10
        echo "</br>";
        for ($i = 1; $i <= 10; $i++)
        {
            /*if ($i != 10)
            {
                echo $i.", ";
            }
            else 
            {
                echo  $i;
            }*/
            
            echo ($i != 10) ? $i.", ": $i;
            
        }

        // BUCLE IMRPIMIR NUMERO DEL 1 AL 100 SOLO LOS MULTIPLOS DE 5 Y 7
        echo "</br>Con For y Array";
        echo "</br>";

        for ($i = 1; $i <= 100; $i++)
        {
            if ($i % 5 == 0 && $i % 7 == 0)
            {
                $x[] = $i;
            }
        }
        for ($i = 0; $i < count($x); $i++)
        {
            $d = count($x) - 1;
            if ($i != $d)
            {
                echo $x[$i].", ";
            }
            else
            {
                echo $x[$i];
            }
            
        }

        // WHILE. BUCLE IMRPIMIR NUMERO DEL 1 AL 100 SOLO LOS MULTIPLOS DE 5 Y 7
        echo "</br>Con WHILE";
        echo "</br>";
        $i = 1;
        while ($i <= 100)
        {
            if ($i % 5 == 0 && $i % 7 == 0)
            {
                echo $i.", ";
            }
            $i++;
        }



    ?>
</body>
</html>