class ArticuloVivero
{
    constructor(nombre, precio)
    {
        this.nombre = nombre
        this.precio = precio
    }

    mostrarFicha()
    {
        return this.nombre + ", " + this.precio
    }
}

class Planta extends ArticuloVivero
{
    constructor(nombre, precio, necesitaSol)
    {
        super(nombre, precio)
        this.necesitaSol = necesitaSol
    }

    recomendacion()
    {
        return this.necesitaSol?"Colocar al sol":"Colocar a la sombra"
    }
}

const romero = new Planta("Romero", 6, true)
console.log(romero.mostrarFicha());
console.log(romero.recomendacion());
