class Transporte
{
    constructor(distancia)
    {
        this.distancia = distancia
    }

    calcularPrecio()
    {
        return this.distancia * 0.5
    }
}

class Taxi extends Transporte
{
    constructor(distancia, bajadaBandera)
    {
        super(distancia)
        this.bajadaBandera = bajadaBandera
    }

    calcularPrecio()
    {
        return (this.distancia * 1.2) - this.bajadaBandera
    }
}

const coche = new Transporte(10);
const taxi = new Taxi(10, 3)
console.log(coche.calcularPrecio());
console.log(taxi.calcularPrecio());
