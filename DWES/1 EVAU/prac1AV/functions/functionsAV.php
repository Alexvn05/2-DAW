<?php
    function filterByType($array, $type)
    {
        $resul = [];
        switch ($type)
        {
            case "even": 
                $resul = array_filter($array, fn($n) => $n % 2 === 0);
                break;

            case "odd": 
                $resul = array_filter($array, fn($n) => $n % 2 !== 0);
                break;

            case "prime": 
                foreach ($array as $n)
                {
                    $esPrimo = true;
                    if ($n == 1) {$esPrimo = false;}
                    for ($i = 2; $i < $n; $i++)     // SI EL NUMERO ES MENOR QUE 2 YA NO ENTRA
                    {
                        if ($n % $i == 0)           // SI EL NUMERO ES DIVISIBLE YA NO ES PRIMO Y SE SALE DEL BUCLE
                        {
                            $esPrimo = false;
                            break;
                        }
                        
                    }
                    if ($esPrimo)
                        {
                            $resul[] = $n; 
                        }
                }
                break;

            case "positive": 
                $resul = array_filter($array, fn($n) => $n > 0);
                break;

            case "negative": 
                $resul = array_filter($array, fn($n) => $n < 0);
                break;
            
            default: 
                return[];
        }
        return $resul;
    }

    function calculateStatistic($array)
    {
        $array_moda = [];
        foreach ($array as $n)
        {
            if (!isset($array_moda[$n]))
            {
                $array_moda[$n] = 0;
            }  
            $array_moda[$n]++;;
            
        }
        $nMax = 0;
        $moda = 0;
    
        foreach ($array_moda as $n => $total)
        {
            if ($nMax < $total)
            {
                $nMax = $total;
                $moda = $n;
            }
        }
        

        $media = array_sum($array) / count($array);
        sort($array);
        $n = count($array);
        $d = (int)($n / 2);
        if ($n % 2 == 1)
        {
            $mediana = $array[$d];
        }
        else
        {
            $mediana = ($array[$d] + $array[$d-1]) / 2;
        }

        $resul = [
            "Media" => $media, 
            "Mediana" => $mediana, 
            "Moda" => $moda
        ];

        return $resul;
    }

    function analyzeWords($string)
    {   
        $palabras = explode(" ",$string);
        
        foreach ($palabras as $p) 
        {
            $arrPal[$p] = strlen($p);
        }

        $pLarga = 0;
        $nomPLarga = "";

        $pCorta = 10;
        $nomPCorta = "";

        foreach ($arrPal as $p => $tamaño)
        {
            if ($tamaño > $pLarga)
            {
                $pLarga = $tamaño;
                $nomPLarga = $p;
            }
            if ($tamaño < $pCorta)
            {
                $pCorta = $tamaño;
                $nomPCorta = $p;
            }
            
        }
        $resul = [
            "Numero de palabras" => count($palabras),
            "Palabra mas larga" => $nomPLarga,
            "Palabra mas corta" => $nomPCorta
        ];
        return $resul;


    }

    function convertTemperature($temp, $og = "Celsius", $des = "Fahrenheit")
    {
        $temperatura = 0;
        switch ($og)
        {
            case "Celsius":
                if ($des == "Fahrenheit")
                {
                    $temperatura = ($temp * 9 / 5) + 32;
                }
                else if ($des == "Kelvin")
                {
                    $temperatura = 	$temp + 273.15;
                }
                break;
            
            case "Fahrenheit":
                if ($des == "Celsius")
                {
                    $temperatura = ($temp - 32) * 5 / 9 ;
                }
                else if ($des == "Kelvin")
                {
                    $temperatura = ($temp - 32) * 5 / 9 + 273.15 ;
                }
                break;
                
            case "Kelvin":
                if ($des == "Celsius")
                {
                    $temperatura = $temp - 273.15;
                }
                else if ($des == "Fahrenheit")
                {
                    $temperatura = ($temp - 273.15) * 9 / 5 + 32;
                }
                break;

            default:
                $temperatura = false;
        
        }
        return $temperatura;
    }
?>