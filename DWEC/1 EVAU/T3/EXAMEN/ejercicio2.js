// EJERCICIO 2
    const importes = [12, 25, 8, 40, 15, 30]
// Apartado a
    const multiplos = importes.filter(im => im % 5 == 0 )
    console.log(multiplos);

// Apartado b
    const descuento = importes.map(im => im * 0.8);
    console.log(descuento);

// Apartado c
    const menores = importes.filter(im => im < 20)
    const suma = menores.reduce((acu, num) => acu + num, 0)
    console.log(suma);
    