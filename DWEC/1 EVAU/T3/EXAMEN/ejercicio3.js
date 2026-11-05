// EJERCICIO 3

// Apartado 1
    let numeroTexto = "42.85abc"
    let numero = parseFloat(numeroTexto)
    console.log(numero);
    

// Apartado 2
    let saludo = "Hola"
    let resultado = isNaN(saludo);
    console.log(resultado);
    

// Apartado 3
    let valor = 25 / 0;
    let esFinito = isFinite(valor)
    console.log(esFinito);
    

// Apartado 4
    let nombre = "Juan & Ana"
    let resultado2 = encodeURI(nombre)
    console.log(resultado2);
    

// Apartado 5
    let textoCodificado = "Desarrollo%20%WEB%20%26%20JavaScript";
    let textoOriginal = decodeURIComponent(textoCodificado)
    console.log(textoOriginal);
    

