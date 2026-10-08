<?php

// BIBLIOTECA DE FUNCIONES

// COMPARA PALABRAS A Y B, SI LA LONGUITUD DE A > B , DEVUELVE UN NUMERO POSITIVO,
                        // SI A < B, DEVUELVE UN NUMERO NEGATIVO
                        // SI SON IGUALES DEVULEVE 0
    function comparacion($a, $b)
    {
        $n = 0;
        if (strlen($a) > strlen($b))
        {
            return 1;
        }
        else if (strlen($a) < strlen($b))
        {
            return -1;
        }
        else
        {
            return 0;
        }
    }

// CUENTA LETRAS, RECIBE LA PALABRA A Y LA LETRA X. CUENTA CUANTAS LETRAS HAY EN ESA PALABRA
    // SI NO SE INDICA LA LETRA DEVUELBE EL NUMERO DE AES QUE HAY

    function cuentaLetras($a, $x = "a")
    {
        $cont = 0;
        for ($i=0; $i < strlen($a); $i++) 
        { 
            if ($a[$i] == $x)
            {
                $cont += 1;
            }
        }
        return $cont;
    }

