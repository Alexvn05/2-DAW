class CalculadoraNotas
{
    calcularMedia(...calificaciones)
    {
        if (calificaciones.length == 1)
        {
            return calificaciones[0]
        }
        else if (calificaciones.length != 0 && calificaciones.length <= 3)
        {
            let suma = 0
            for (let nota of calificaciones)
            {
                suma += nota
            }
            return suma / calificaciones.length
        }
        else
        {
            throw new Error("No hay calificaciones o hay mas de 3")
        }
    }
}

const calc = new CalculadoraNotas
console.log(calc.calcularMedia(7));
console.log(calc.calcularMedia(6, 8));
console.log(calc.calcularMedia(5, 7, 9));
