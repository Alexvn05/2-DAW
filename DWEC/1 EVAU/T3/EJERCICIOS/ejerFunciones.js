// DWEC — Ejercicios de funciones definidas por el usuario

    console.log("==============================");
    // Ejercicio 1. Calcular el precio de un producto
    {
        // Función por declaración: calcularPrecio(precio, descuento = 10)
        // Devuelve el precio final tras aplicar el descuento.
        function calcularPrecio(precio, descuento = 10)
        {
            return precio * ((100-descuento)/100);
        }

        // Llamada 1: indicando ambos argumentos
        console.log(calcularPrecio(45, 25));
        // Llamada 2: indicando únicamente el precio
        console.log(calcularPrecio(45));
    }

    console.log("==============================");
    // Ejercicio 2. Obtener el mayor de tres números
    {
        // Función por expresión asignada a 'obtenerMayor', que reciba tres números
        // y devuelva el mayor usando estructuras condicionales.
        // Restricción: no usar Math.max()
        function obtenerMayor(n1, n2, n3)
        {
            let nMax = n1;
            if (n2 > n1 || n3 > n1)
            {
                if (n2 > n3)
                {
                    nMax = n2;
                }
                else
                {
                    nMax = n3;
                }
            }
            return nMax;
        }

        // Llamada y mostrar el resultado
        console.log(obtenerMayor(11, 9, 10));
        
    }

    console.log("==============================");
    // Ejercicio 3. Contar elementos de un array
    {
        let numeros = [5, 18, 3, 22, 10, 15, 7];
        // Función por declaración: contarMayores(array, limite)
        // Devuelve cuántos elementos son estrictamente mayores que el límite.
        function contarMayores(array, limite) 
        {
            return array.filter(num => num > limite).length;
        }

        // Llamada con numeros y límite 10 → resultado esperado: 3
        console.log(contarMayores(numeros, 10));

    }

    console.log("==============================");
    // Ejercicio 4. Crear un array a partir de parámetros variables
    {
        // Función por declaración: filtrarPositivos(...numeros) usando parámetro rest
        // Devuelve un array solo con los números mayores que cero.
        function filtrarPositivos(...numeros)
        {
            let positivos = [];
            for (let num of numeros)
            {
                if (num > 0)
                {
                    positivos.push(num);
                }
            }
            return positivos;
        }

        // Llamada: filtrarPositivos(-3, 5, 0, 8, -2, 12);
        console.log(filtrarPositivos(-3, 5, 0, 8, -2, 12))
        // Resultado esperado: [5, 8, 12]

    }

    console.log("==============================");
    // Ejercicio 5. Aplicar una operación a un array
    {
        // Función por declaración: transformarArray(array, funcion)
        // Recorre el array, aplica la función recibida a cada elemento y
        // devuelve un nuevo array con los resultados.
        // Restricción: no usar map()
        function transformarArray(array, funcion)
        {
            let num = [];
            for (let n of array)
            {
                num.push(funcion(n));
            }
            return num;
        }

        // a) Llamada con [2, 4, 6] y una función por expresión anónima que multiplique por 2
        // Resultado esperado: [4, 8, 12]
        console.log(transformarArray([2, 4, 6], function (n) {return n*2}));
        // b) Llamada con [2, 4, 6] y una función flecha que sume 5
        // Resultado esperado: [7, 9, 11]
        console.log(transformarArray([2, 4, 6], function (n) {return n+5}));

    }

    console.log("==============================");
    // Ejercicio 6. Calcular estadísticas de un array
    {
        let notas = [6, 8, 5, 9, 7];
        // Función por declaración: estadisticas(array)
        // Devuelve un objeto { suma, media, mayor, menor }
        function estadisticas(array)
        {
            let suma = 0;
            let media;
            let mayor = array[0];
            let menor = mayor;

            for (let n of array)
            {
                suma += n;
                if (n > mayor)
                {
                    mayor = n;
                }
                
                if (n < menor)
                {
                    menor = n;
                }
            }
            media = suma / array.length;

            return {
                suma: suma,
                media: media, 
                mayor: mayor,
                menor: menor
            }
        }

        // Llamada con notas
        // Resultado esperado: { suma: 35, media: 7, mayor: 9, menor: 5 }
        console.log(estadisticas(notas));
    }