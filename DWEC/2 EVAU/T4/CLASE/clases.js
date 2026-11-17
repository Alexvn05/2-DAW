class Centro
{
    constructor(nombre, tipo)
    {
        this.nombre = nombre
        this.tipo = tipo
    }

    getNombre()
    {
        return this.nombre
    }

    setNombre(nombre)
    {
        this.nombre = nombre
    }

    getTipo()
    {
        return this.tipo
    }

    setTipo(tipo)
    {
        this.tipo = tipo
    }

}

const etg = new Centro("Enrique Tierno Galvan", "IES")
console.log(etg.getNombre());
etg.setNombre("algo")
console.log(etg.getNombre());

 