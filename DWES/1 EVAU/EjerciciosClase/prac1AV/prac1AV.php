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
        for ($i=0; $i < $rows; $i++) 
        { 
            for ($j=0; $j < $cols; $j++) 
            { 
                if ($i > 0 && $i < ($rows -1) )
                {
                    if ($j == 0 || $j == ($cols -1))
                    {
                        echo " *";
                    }
                    else
                    {
                        echo '<a class="white"> *</a>';
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
                    echo " *";
                }
                if ($i % 2 == 0 && $j % 2 == 0)
                {
                    echo " *";
                }                
                echo '<a class="white">*</a>';

            } 
            echo "<br>";
        }
        echo "<br>";
    ?>
</body>
</html>