// EJERCICIO 5
    function obtenerMayor(array)
    {
        numMayor = array[0];
        if (array.length != 0)
        {
            for (let n of array)
            {
                if (n > numMayor)
                {
                    numMayor = n
                }
            }

            return numMayor
        }
        else
        {
            return null;
        }
    }

    const num = [2, 5, 3, 9, 6]
    const num2 = [];

    console.log(obtenerMayor(num));
    console.log(obtenerMayor(num2));

    