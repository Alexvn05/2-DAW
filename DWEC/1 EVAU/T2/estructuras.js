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

let codigo = "A";
switch  (codigo)
{
    case "A": 
    break;
}

for (let i = 4; i <= 40; i+=4)
{
    console.log(i);
}