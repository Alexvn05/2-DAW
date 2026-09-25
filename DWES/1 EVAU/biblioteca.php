<?php
    include 'f.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca php</title>
</head>
<body>

    <?php    
        echo comparacion("hola", "adios");
        echo "<br>";
        echo comparacion("adios", "hola");
        echo "<br>";
        echo comparacion("hola", "hola");

        echo "<p>Cuenta letras</p>";
        echo cuentaLetras("hola");

    ?>
</body>
</html>