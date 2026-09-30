let importe = 150;
if (importe > 100)
{
    console.log("Se ha aplicado el descuento");
}

let temperatura = 20;
if (temperatura > 18 && temperatura < 25)
{
    console.log("Temperatura perfecta");
}

let velocidad = 95;
if (velocidad < 50 )
{
    console.log("Velocidad baja")
}
else if (velocidad > 90 )
{
    console.log("Velocidad rapida")
}
else if (velocidad > 50 )
{
    console.log("Velocidad media")
}
/*
let codigo = "A";
switch  (codigo)
{
    case "A": "Hola"
        break;

    case "B": "Adios"
        break;

    default: "Chao"
}*/

for (let i = 4; i <= 40; i+=4)
{
    console.log(i);
}

let saldo = 100;
while (saldo > 10)
{
    console.log(saldo);
    saldo -= 10;

}
let intento = 1;
do 
{
    console.log("Intento: "+intento);
    intento++;
}
while (intento <= 4);

// Mostrar los 8 primeros numeros multiplos de 7 que hay del 1 al 100
let x = 0;
let n = 7;
let multiplicar = 0;
for (let i = 1; i < 100; i++) 
{
    multiplicar = n * i;
    console.log(multiplicar);
    x++;
    if (x == 7) break;
    
}
/*
for ...
{
    for ...
    {
        if ... break;
    }
    con el break sale del primer for
}
*/

// Con for muestra todos los numeros del 1 al 10 
// excepto los multiplos de 3
for (let i = 1; i <= 10; i++)
{
    if (i % 3 == 0) continue;
    console.log(i);
}