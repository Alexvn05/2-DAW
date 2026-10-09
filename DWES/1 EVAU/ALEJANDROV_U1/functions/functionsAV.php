<?php
    function textStats(string ...$palabras)
    {
        if (empty($palabras))
        {
            return false;
        }

        $total = count($palabras);

        $contP = [];
        foreach ($palabras as $p)
        {
            $contP[$p] = strlen($p);
        }

        $longest = "";
        $palMax = 0;

        $shortest = "";
        $palMin = 10; // Para que si hay una palabra mas corta se añada
        $suma = 0;

        foreach ($contP as $p => $tamaño)
        {
            if ($palMax < $tamaño)
            {
                $palMax = $tamaño;
                $longest = $p;
            }
            else if ($palMin > $tamaño)
            {
                $palMin = $tamaño;
                $shortes = $p;
            }
            $suma += $tamaño;
        }

        $texto = implode("", $palabras);
        $char = strlen($texto);

        $avg = $suma / $total;
        $resul = [
            "total" => $total,
            "longest" => $longest,
            "shortest" => $shortes,
            "char" => $char, // CUENTA LOS ESPACIOS
            "avg" => number_format($avg, 2)
        ];

        return $resul;
    }

    function filterNumbers($number, string $filter = "even", $limit = null)
    {
        $resul = "";
        
        switch ($filter)
        {
            case "even":
                $resul = $limit == null ? array_filter($number, fn($n) => $n % 2 == 0) : array_slice(array_filter($number, fn($n) => $n % 2 == 0), 0, $limit);
                break;
            
            case "odd":
                $resul = $limit == null ? array_filter($number, fn($n) => $n % 2 != 0) : array_slice(array_filter($number, fn($n) => $n % 2 != 0), 0, $limit);
                // $resul = array_filter($number, fn($n) => $n % 2 != 0);
                break;

            case "positive":
                $resul = $limit == null ? array_filter($number, fn($n) => $n > 0) : array_slice(array_filter($number, fn($n) => $n > 0), 0, $limit);
                // $resul = array_filter($number, fn($n) => $n > 0);
                break;

            default: 
                $resul = false;
        }
        return $resul;
    }

?>