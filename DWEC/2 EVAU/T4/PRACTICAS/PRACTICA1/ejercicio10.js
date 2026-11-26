class OperacionPago
{
    constructor(cantidad)
    {
        if (new.target === OperacionPago)
        {
            throw new Error("No se puede instanciar una clase abstracta")
        }
        this.cantidad = cantidad
    }

    procesar()
    {
        throw new Error("El metodo procesar debe ser implementado");
        
    }
}

class PagoTarjeta extends OperacionPago
{
    procesar()
    {
        return "Pago con tarjeta: " + this.cantidad + "€"
    }
}

const tarj = new PagoTarjeta(35)
console.log(tarj.procesar());

// const prueba = new OperacionPago(20)
// console.log(prueba.procesar());

