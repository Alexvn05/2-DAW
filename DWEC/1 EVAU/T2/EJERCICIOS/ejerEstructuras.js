// UT2. Ejercicios prácticos de estructuras de control en JavaScript
// Objetivo: usar if/else, switch, bucles (for, while, do...while) y break/continue.
// Todos los resultados se muestran con console.log().

    // Ejercicio 1. Precio de una entrada
        // Variable: let edad = ...;
        // < 12 años → 6 €
        // >= 65 años → 8 €
        // resto → 12 €
        // Muestra el precio.
        {
            let edad = 65;
            let precio;
            if (edad >= 65)
            {
                precio = 8;
            }
            else if (edad < 12)
            {
                precio = 6;
            }
            else 
            {
                precio = 12;
            }
            console.log(precio);
        }

    // Ejercicio 2. Acceso a una zona restringida
        // let edad = 22;
        // let tieneAcreditacion = true;
        // Acceso solo si edad >= 18 Y tieneAcreditacion.
        // Muestra "Acceso permitido" o "Acceso denegado".
        {
            let edad = 22;
            let tieneAcreditacion = true;
            if (edad >= 18 && tieneAcreditacion)
            {
                console.log("Acceso permitido");
            }
            else
            {
                console.log("Acceso denegado");

            }
        }


    // Ejercicio 3. Tipo de usuario (usa switch)
        // let tipoUsuario = ...; // "A", "E", "L" u otro
        // "A" → "Administrador"
        // "E" → "Editor"
        // "L" → "Lector"
        // cualquier otro → "Tipo de usuario desconocido"
        {
            let tipoUsuario = "E";
            let r = "";
            switch (tipoUsuario)
            {
                case "A": r = "Administrador";
                    break;
                
                case "E": r = "Editor";
                    break;
                
                case "L": r = "Lector";
                    break;

                default: r = "Tipo de usuario desconocido";
            }
            console.log(r);
        }


    // Ejercicio 4. Potencias de 2 (usa for)
        // Muestra: 2, 4, 8, 16, 32, 64
        for (let i = 0; i < 10; i++)
        {
            
        }


    // Ejercicio 5. Suma acumulada (usa for y variable suma)
        // Suma los números del 1 al 10.
        // Muestra: "Suma total: 55"



    // Ejercicio 6. Reducción de una deuda (usa while)
        // let deuda = 90;
        // Mientras deuda > 0, resta 15 en cada iteración y muestra el nuevo valor.
        // Al llegar a 0, muestra "Deuda pagada"



    // Ejercicio 7. Nivel de carga (usa do...while)
        // let carga = 10;
        // En cada iteración, suma 15 y muestra el valor.
        // Repite mientras carga < 70.



    // Ejercicio 8. Primer número divisible entre 6 y 7 (usa break)
        // Recorre del 1 al 100.
        // Cuando encuentres el primero divisible entre 6 Y entre 7 a la vez:
        //   1. muéstralo
        //   2. termina el bucle con break



    // Ejercicio 9. Excluir números terminados en 5 (usa continue)
        // Recorre del 1 al 30.
        // No muestres los números que terminen en 5.



    // Ejercicio 10. Asientos de un cine (bucles for anidados)
        // 4 filas, 6 asientos por fila.
        // Muestra: "Fila 1 - Asiento 1", "Fila 1 - Asiento 2", ...



    // Ejercicio 11. Finalizar únicamente el bucle interior
        // 3 categorías, 6 elementos cada una (bucles for anidados).
        // Cuando el elemento llegue a 4, termina SOLO el bucle interior con break.
        // Muestra: "Categoría 1 - Elemento 1", etc. (solo las combinaciones que se lleguen a ejecutar)



    // Ejercicio 12. Búsqueda etiquetada (bucles for anidados + etiqueta)
        // 5 secciones, 8 estantes cada una.
        // Etiqueta el bucle exterior.
        // Cuando sección = 4 y estante = 3:
        //   1. muestra "Libro localizado"
        //   2. termina los DOS bucles con break y la etiqueta



    // Ejercicio 13. Control de velocidad
        // let velocidad = ...;
        // < 30 → "Velocidad insuficiente"
        // entre 30 y 100 (ambos incluidos) → "Velocidad correcta"
        // > 100 → "Exceso de velocidad"



    // Ejercicio 14. Cuenta de tres en tres (usa for)
        // Muestra: 3, 6, 9, 12, 15, 18, 21, 24, 27, 30



    // Ejercicio 15. Selección de idioma (usa switch)
        // let idioma = ...; // "es", "en", "fr" u otro
        // "es" → "Español"
        // "en" → "Inglés"
        // "fr" → "Francés"
        // cualquier otro → "Idioma no disponible"