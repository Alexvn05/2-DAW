// EJERCICIO 6 | VARIABLES Y CONSTANTES
    // 1. Una variable llamada edad que almacene un número entero.
    let edad = 10;

    // 2. Una variable llamada precio que almacene un número decimal.
    let precio = 10.5;

    // 3. Una constante llamada PI que almacene el valor 3.14159.
    const pi = 3.14159;

    // 4. Una variable llamada nombre que almacene tu nombre.
    let nombre = "Alex";

    // 5. Una variable llamada apellidos que almacene tus apellidos.
    let apellidos = "Vilches Najera";

    // 6. Una variable llamada codigoPostal que almacene un código postal de cinco dígitos como una cadena
    // de caracteres.
    let codigoPostal = "28021";

    // 7. Una variable llamada mayorEdad que almacene un valor booleano.
    let mayorEdad = true;

    // 8. Una constante llamada DIAS_SEMANA que almacene el número de días que tiene una semana.
    const DIAS_SEMANA = 7;

    // 9. Una variable llamada resultado que se declare sin asignarle ningún valor.
    let resultado;

    // 10. Una variable llamada respuesta que almacene expresamente el valor null .
    let respuesta = null;

    // 11. Una variable llamada temperatura que almacene un número negativo con decimales.
    let temperatura = -5.4;

    // 12. Una variable llamada mensaje que almacene una cadena de caracteres vacía.
    let mensaje = "";

    // 13. Una variable llamada cantidad que almacene el número 100 como una cadena de caracteres.
    let cantidad = "100";

    // 14. Una variable llamada activo que almacene el valor booleano false .
    let activo = false;

    // 15. Una variable llamada contador que se declare utilizando var y almacene el número 0.
    var contador = 0;
    


// EJERCICIO 6 | CONVERSION EXPLICITA DE TIPOS
    // 1. Convierte la cadena "25" a un valor de tipo number .
    let n1 = Number("25");

    // 2. Convierte la cadena "12.8" a un valor de tipo number , conservando la parte decimal.
    let n2 = Number("12.8");
    console.log(n2);

    // 3. Convierte la cadena "12.8" a un valor de tipo number sin parte decimal.
    let n3 = parseInt("12.8");

    // 4. Convierte la cadena "15abc" a un valor numérico utilizando parseInt() .
    let n4 = parseInt("15abc");

    // 5. Convierte la cadena "18.5kg" a un valor numérico conservando la parte decimal.
    let n5 = parseFloat("18.5kg");
    console.log(n5);

    // 6. Convierte el número 100 a una cadena de caracteres.
    let n6 = String(100);

    // 7. Convierte el valor 1 a un valor booleano.
    let n7 = Boolean(1);

    // 8. Convierte la cadena vacía "" a un valor booleano.
    let n8 = Boolean("");