// EJERCICIO 1

// Apartado a.1
    const notas = [7,5,8,5,9,6]

// Apartado a.2
    for (let i = 0; i < notas.length; i++)
    {
        console.log(i+" - "+notas[i]);
        
    }
    
// Apartado a.3
    let a = notas.shift()
    console.log(notas)
    console.log(a);

// Apartado a.4
    let b = notas.lastIndexOf(5)
    console.log(b)

// Apartado a.5
    notas.push(3);
    console.log(notas)

// Apartado b
    const alumnos = new Map([
        ["Ana", 6],
        ["Luis", 8],
        ["Marta", 9]
    ]);


    for (const [alumno, nota] of alumnos)
    {
        console.log("Nombre: "+alumno+" | Nota: "+nota)
    }