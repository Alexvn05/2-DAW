class Aparatos
{
    constructor(horas)
    {
        this.horas = horas
    }

    calcularConsumo()
    {
        return this.horas * 0.1
    }
}

class Calefactor extends Aparatos
{
    constructor(horas, potencia)
    {
        super(horas)
        this.potencia = potencia
    }

    calcularConsumo()
    {
        return this.horas * this.potencia
    }
}

const aparato = new Aparatos(4)
const calefactor = new Calefactor(4, 1.5)

console.log(aparato.calcularConsumo());
console.log(calefactor.calcularConsumo());
