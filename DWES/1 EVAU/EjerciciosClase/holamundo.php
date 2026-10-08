<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>
<body>
    <p>La siguiente línea está hecha con PHP:</p>
    <?php
        echo "<p>hello world!<p/>";
    ?>


    <!-- Comentario HTML -->

    <p>Esta línea también:</p>
    <p>
        <?php
        echo "hola mundo";
        echo "<br>";
        print "otra cosa";
        echo "<br>";
        echo("otra más");
        echo "<br>";    
        

        //  VARIABLES:
        /* Comentario de 
        varias líneas */
        //String:
        //String name = "Juan";
        $name  = "Juan";
        $surname = 'Pérez';

        echo $name;
        //Para concatenar strings utilizamos::
        echo $name . " " . $surname;
        echo "<br>";
        echo "$name - $surname"; // Sí interpetra las variables
        echo "<br>";
        echo '$name - $surname'; // No interpetra las variables
        echo "<br>";
        
        // númericas
        $age = 21;
        echo "<p>Tengo $age años</p>";
        var_dump($age);
        // Las variables pueden cambiar de tipo
        $age = 2.3;
        var_dump($age);
        $age = "23asdfasdf";
        var_dump($age);
        $age = false;
        var_dump($age);
        $age = null;
        var_dump($age);


        // Constantes
        define("IVA_GENERAL", 0.21);
        const IVA_REDUCIDO = 0.08;
        $precio = 20.3;
        echo "<p>El precio con IVA es: " . $precio * IVA_GENERAL . "</p>";
        echo "<p>El precio final con IVA es: " . $precio + $precio * IVA_GENERAL . "</p>";
        echo "<p>El precio con IVA reducido es: " . $precio + $precio * IVA_REDUCIDO . " </p/>";

        var_dump(PHP_VERSION);
        var_dump(__FILE__);
        var_dump(__LINE__);

        $price = 29.3;

        // OPERADORES (nuevo)
        $a = 5;
        $potencia = $a ** 10; // 5 elevado a 10
        var_dump($b);
        
        $a = 7;
        $restoDivision = $a % 2;
        var_dump($restoDivision);

        // OPERADORES DE INCREMENTO
        $a = 1;
        $a++; //$a = $a + 1;
        var_dump($a);

        $a += 4; // $a = $a + 4
        $a /= 2; 
        var_dump($a);
        
        $b = 5;
        $suma = ++$b + 2; // Da 8, si fuera $b++ no se haria
        var_dump($suma);

        //
        $b = 5;
        $suma = ++$b + 2;  // Se suma la b y da 6
        var_dump($b);

        $b = 5;
        $suma = $b++ + 2;  // Se suma la b y da 6
        var_dump($b);

        // OPERADOR TERNARIO
        $a = 5;
        $b = "5";
        $comparacion = $a == $b;
        var_dump($comparacion);

        $a = 5;
        $b = "5";
        $comparacion = $a != $b;
        var_dump($comparacion);

        $a = 5;
        $b = 6;
        $comparacion = $a <=> $b;
        var_dump($comparacion);


        ?>



    </p>
</body>
</html>