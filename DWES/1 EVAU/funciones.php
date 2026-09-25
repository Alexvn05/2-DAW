<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h1>Funciones</h1>
    <?php
        // FUNCION QUE RECIBE UN ARRAY DE NOTAS
        function aprobados($notas):int // VALOR DE RETORNO (OPCIONAL)
        {
            $cont = 0;
            foreach($notas as $n)
            {
                if ($n >= 5)
                {
                    $cont += 1;
                }
            }
            return $cont;
            foreach($notas as $n)
            {

            }
        }

        echo aprobados([9,0,2, 4, 5, 6]);
        echo "<br>";
        // FUNCION QUE RECIBA DOS STRINGS Y DEVUELVA LA CONCATENACION DE LOS DOS
        function enlazado($s1, $s2)
        {
            return $s1.$s2;
        } 

        echo enlazado("Ale","jandro");

        // PARAMETROS CON VALORES POR DEFECTO
        echo "<br>";
        function saludar($nombre, $saludo = "Hola")
        {
            return "$saludo, $nombre";
        }
        echo saludar("Alejandro");
        echo "<br>";
        echo saludar("Alejandro", "Buenos dias");

        // FUNCION QUE RECIBA UN ARRAY INDEXADO DE NUMERO, Y UN SEGUNDO PARAMETRO DE TIPOO BOOLEAN
        // SI ES FALSO O NO EXISTE QUE DEVURLVA ORDENADO DE MENOR A MAYOR, SINO AL REVES
        echo "<br>";

        function odenar($num, $correcto = null)
        {
            if (!$correcto)
            {
                sort($num);
            }
            else
            {
                rsort($num);
            }
            return $num;
        } 
        var_dump(odenar([4,1,9,10,0], true));
        var_dump(odenar([4,1,9,10,0], false));
        var_dump(odenar([4,1,9,10,0]));

        // FUNCION QUE RECIBE UNA CANTIDAD INDETERMINADA DE NUMEROS Y DEVUELVE LA SUMA DE TODOS ELLOS
        echo "<br>";
        echo suma(1,2,3);
        echo "<br>";
        echo suma(10,5);
        echo "<br>";
        echo suma(30);
        function suma(...$num)
        {
            return array_sum($num);
        }
    ?>
    
</body>
</html>