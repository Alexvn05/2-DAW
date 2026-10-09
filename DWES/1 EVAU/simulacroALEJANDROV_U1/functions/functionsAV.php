<?php
    function basicStatistics(int ...$numero)
    {
        if (empty($numero))
        {
            return false;
        }
        

        $suma = array_sum($numero);

        $maximo = max($numero);

        $minimo = min($numero);

        $media = $suma / count($numero);

        $neg = array_filter($numero, fn($n) => $n < 0);
        $impar = array_filter($numero, fn($n) => $n % 2 != 0);

        $numAsociativo = [
            "Suma" => $suma,
            "Max" => $maximo,
            "Min" => $minimo,
            "Media" => $media,
            "Negativo" => $neg,
            "Impar" => $impar 
        ];
        return $numAsociativo;
        
    }

    function operations(array $numbers, string $operation = "order", $incremental = true) 
    //OPERATION SE ORDENA DE MAYOR A MENOr, SE SUMA TODO O DEVUELVE EL PRODCUTO
    {
        $resul = null;
        switch ($operation)
        {
            
            case "order":

                if ($incremental) 
                {
                    sort($numbers);
                } else 
                {
                    rsort($numbers);
                }
                
                $resul = $numbers;
                break;
            
            case "sum":
                $resul = array_sum($numbers);
                break;
            
            case "product":
                $resul = array_product($numbers);
                break;
            
            default: 
                $resul = "Operacion no encontrada";
        }
        return $resul;
    }
?>