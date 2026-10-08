<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>1- ARRAY BIDIMENSIONAL</h2>
    <?php
        $parImpar = [];
        for ($i = 0; $i < 4; $i++)
        {
            for ($j = 0; $j < 5; $j++)
            {

                $r = (($i+1) + ($j+1)) % 2 == 0 ? "par" : "impar";
                $parImpar[$i][$j] = $r;
                
            }
        }
        foreach ($parImpar as $fila)
        {
            echo implode(", ",$fila)."<br>";
        }
    ?>
</body>
</html>