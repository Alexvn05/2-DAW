// EJERCICIO 4
    function calcularPrecioEntrada(edad, precio = 12)
    {
        
        if (edad < 12 )
        {
            precio /= 2
        }
        else if (edad >= 65)
        {
            precio *= 0.7
        }
        
        return precio;
    }

    console.log(calcularPrecioEntrada(11, 40))
    console.log(calcularPrecioEntrada(11))