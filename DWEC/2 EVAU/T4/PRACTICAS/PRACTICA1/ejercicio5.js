class GeneradorEtiquetas
{
    crearEtiqueta() {
        switch(arguments.length)
        {
            case 1:
                return "Producto: " + arguments[0]
            case 2:
                return arguments[1] + " - " + arguments[0]
            case 3:
                return arguments[1] + " - " + arguments[0] + 
                       " [" + arguments[2] + "]"
            default:
                throw new Error("Numero de argumentos invalido")

        }
    }
}


const cuaderno = new GeneradorEtiquetas();
console.log(cuaderno.crearEtiqueta("Cuaderno"));
console.log(cuaderno.crearEtiqueta("Cuaderno", "Papeleria"));
console.log(cuaderno.crearEtiqueta("Cuaderno", "Papeleria", 125));
