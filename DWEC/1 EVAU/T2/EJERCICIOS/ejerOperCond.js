// UT2. Ejercicios de operadores lógicos y operador condicional
    // Ejercicio 1. Operadores lógicos
        // 1-
            // let edad = 20;
            // let resultado = edad >= 18 && edad <= 30;
                // RESULTADO | true

        // 2-
            // let edad = 35;
            // let resultado = edad < 18 || edad > 65;
                // RESULTADO | false

        // 3-
            // let temperatura = 38;
            // let resultado = temperatura < 0 || temperatura > 35;
                // RESULTADO | true

        // 4-
            // let edad = 16;
            // let tienePermiso = true;
            // let resultado = edad >= 18 || tienePermiso;
                // RESULTADO | true

        // 5-
            // let usuarioActivo = false;
            // let resultado = !usuarioActivo;
                // RESULTADO | true

        // 6-
            // let edad = 25;
            // let tieneCarnet = false;
            // let resultado = edad >= 18 && !tieneCarnet;
                // RESULTADO | true

        // 7-
            // let nota = 7;
            // let asistencia = 80;
            // let resultado = nota >= 5 && asistencia >= 85;
                // RESULTADO | false

        // 8-
            // let edad = 17;
            // let autorizado = true;
            // let acompañado = false;
            // let resultado = edad >= 18 || (autorizado && acompañado);
                // RESULTADO | false

        // 9-
            // let nota = 4;
            // let recuperacion = 6;
            // let resultado = nota >= 5 || recuperacion >= 5;
                // RESULTADO | true

        // 10-
            // let edad = 22;
            // let tieneCarnet = true;
            // let sancionado = false;
            // let resultado = (edad >= 18 && tieneCarnet) && !sancionado;
                // RESULTADO | true

    // Ejercicio 2. Escribir expresiones con operadores lógicos
        // 1. Acceso a una actividad: tiene al menos 18 años Y dispone de autorización.
            // let edad = 20;
            // let autorizado = true;
            // let resultado = edad >= 18 && autorizado;

        // 2. Aviso de acceso: NO tiene cuenta activa O está bloqueada.
            // let cuentaActiva = true;
            // let bloqueado = false;
            // let resultado = !cuentaActiva || bloqueado;

    // Ejercicio 3. Operador condicional (? :)
        // 1-
            // let edad = 16;
            // let resultado = edad >= 18 ? "Mayor de edad" : "Menor de edad";
                // RESULTADO | Menor de edad

        // 2-
            // let nota = 7;
            // let resultado = nota >= 5 ? "Aprobado" : "Suspenso";
                // RESULTADO | Aprobado

        // 3-
            // let temperatura = 12;
            // let resultado = temperatura < 15 ? "Hace frío" : "Hace calor";
                // RESULTADO | Hace frio

        // 4-
            // let numero = 8;
            // let resultado = numero % 2 === 0 ? "Par" : "Impar";
                // RESULTADO | Par

        // 5-
            // let saldo = 40;
            // let precio = 50;
            // let resultado = saldo >= precio ? "Compra posible" : "Saldo insuficiente";
                // RESULTADO | Saldo insuficiente

        // 6-
            // let edad = 18;
            // let resultado = edad > 18 ? "Más de 18" : "18 o menos";
                // RESULTADO | 18 o menos

        // 7-
            // let usuarioActivo = false;
            // let resultado = usuarioActivo ? "Acceso permitido" : "Acceso denegado";
                // RESULTADO | Acceso denegado

        // 8-
            // let edad = 19;
            // let tieneCarnet = true;
            // let resultado = edad >= 18 && tieneCarnet ? "Puede conducir" : "No puede conducir";
                // RESULTADO | Puede conducir

        // 9-
            // let nota = 4;
            // let recuperacion = 6;
            // let resultado = (nota >= 5 || recuperacion >= 5) ? "Superado" : "Pendiente";
                // RESULTADO | Superado

        // 10-
            // let precio = 80;
            // let esSocio = true;
            // let resultado = esSocio ? precio * 0.9 : precio;
                // RESULTADO | precio * 0.9

    // Ejercicio 4. Escribir expresiones con el operador condicional (? :)
        // 1. Aprobado (nota >= 5) o Suspenso
            // let nota = 4;
            // let resultado = nota >= 5 ? "Aprobado" : "Suspernso";

        // 2. "Positivo" si numero > 0, "No positivo" si no
            // let numero = 0;
            // let resultado = numero > 0 ? "Positivo" : "Negativo";

        // 3. "Par" si es divisible entre 2, "Impar" si no
            // let numero = 13; 
            // let resultado = numero % 2 == 0 ? "Par" : "Impar"

        // 4. El mayor de a y b
            // let a = 12;
            // let b = 9;
            // let resultado = a > b ? a : b;

        // 5. Precio con 10 % de descuento si esSocio (número, no cadena)
            // let precio = 80;
            // let esSocio = true;
            // let resultado = esSocio ? precio * 0.9 : precio;

        // 6. "Acceso permitido" si es mayor de edad O tiene autorización; si no, "Acceso denegado"
            // let edad = 16;
            // let tieneAutorizacion = true;
            // let resultado = edad >= 18 ? ""

        // 7. "Compra posible" si hay saldo suficiente Y la cuenta NO está bloqueada; si no, "Compra no posible"
            // let saldo = 60;
            // let precio = 50;
            // let cuentaBloqueada = false;
            // let resultado = 

        // 8. "Superado" si AMBAS notas son >= 5; si no, "Pendiente"
            // let examen = 6;
            // let practicas = 4;
            // let resultado =