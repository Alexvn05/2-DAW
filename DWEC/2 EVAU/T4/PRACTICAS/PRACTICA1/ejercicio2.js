class TarjetaPuntos
{
    #puntos
    constructor(nombre, puntos)
    {
        this.nombre = nombre;
        this.#puntos = puntos;
    }

    consultarPuntos()
    {
        return this.#puntos
    }

    sumarPuntos(cantidad)
    {
        this.#puntos += cantidad;
    }

    canjearPuntos(cantidad)
    {
        if (this.#puntos >= cantidad)
        {
            this.#puntos -= cantidad;
        }
        else
        {
            return console.log("Saldo insuficiente")
        }
    }
}

const nora = new TarjetaPuntos("Nora", 40) 
nora.sumarPuntos(15)
nora.canjearPuntos(20)
console.log(nora.consultarPuntos());
