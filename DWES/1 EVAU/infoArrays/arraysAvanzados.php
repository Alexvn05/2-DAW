<?php
    include "restaurante.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Array de restaurantes</h1>
    <p>La direccion de Carpaccio es:
        <?php
            echo $pinoccio[0]["direccion"];
        ?>
    </p>
    <p>El numero de camareros de Luigi son:
        <?php
            echo $pinoccio[1]["empleados"][1];
        ?>
    </p>
    <p>El numero de bebidas de Carpaccio son:
        <?php
            echo $pinoccio[0]["cantidad"]["bebidas"];
        ?>
    </p>
    <p>El nombre de los restaurantes son:</p>
    <ul>
        <?php
            foreach ($pinoccio as $restaurante) {
                echo "<li>" . $restaurante["nombre"] . "</li>";
            }
        ?>
    </ul>
    <p>Los empleados de ambos restaurantes:</p>
    <ul>
        <?php
            // Tiene q salir Carpaccio: 4, 7, 2
            // Luigi: 2, 6, 1

            /*foreach ($pinoccio as $restaurante) 
            {
                
                echo "<li>".$restaurante["nombre"].": ";
                for ($i=0; $i < count($restaurante["empleados"]); $i++) { 
                    echo $restaurante["empleados"][$i].", ";
                }

                foreach ($restaurante["empleados"] as $empleado) 
                {
                    echo $empleado . ", ";
                }
                echo "</li>";
                
            }*/
            foreach ($pinoccio as $restaurante) 
            {
                if (isset($restaurante["empleados"])) // El isset busca que la variable existe y q no sea null para devolver true o false
                {
                    echo "<li>" . $restaurante["nombre"] . ": " . implode(", ", $restaurante["empleados"]) . "</li>"; 
                                                               // implode recorre todo el array y te devuelve un string con sus elementos unidos
                                                               // por el separador del principio (", ")
                }
                else
                {
                    echo "<li>".$restaurante["nombre"]. ": No hay empleados</li>";
                }
            }
        ?>
    </ul>
    
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Cocina</th>
            <th>Camareros</th>
            <th>Otros</th>
        </tr>
        
            <?php 
                /*foreach ($pinoccio as $restaurante) 
                {
                    echo "<tr>";
                    echo "<td>" . $restaurante["nombre"] . "</td>";
                    foreach ($restaurante["empleados"] as $empleado) 
                    {
                        echo "<td>" . $empleado . "</td>";
                    }
                    echo "</tr>";
                }*/
                foreach ($pinoccio as $restaurante) 
                {
                    echo "<tr>";
                    echo "<td>" . $restaurante["nombre"] . "</td>";

                    if (isset($restaurante["empleados"])) {
                        foreach ($restaurante["empleados"] as $empleado) {
                            echo "<td>" . $empleado . "</td>";
                        }
                    } else {
                        echo "<td></td><td></td><td></td>";
                    }

                    echo "</tr>";
                }
            ?>   
    </table>
    <?php
        // Funcion que reciba un array asociativo, e imprime en una tabla las clabes y el tipo de valor q tiene
        // Clave        |   tipo
        // nombre       |   string
        // direccoon    |   string...
        echo "<br>";
        function imprimirTabla($array)
        {
            $ret = '<table border="1">'; // "<table border=\"1\">"
            $ret .= 
                "<tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                </tr>";

            foreach ($array as $restaurante) 
            {
                foreach ($restaurante as $key => $value) 
                {
                    $ret .= 
                        "<tr>
                            <td>$key</td>
                            <td>".gettype($value)."</td>
                        </tr>";
                }
            }

            $ret .= "</table>"; // .= para concatenar

            return $ret;
        }
        echo imprimirTabla($pinoccio);
    ?>
</body>
</html>