class SensorHumedad
{
    constructor(porcentaje)
    {
        this.porcentaje = porcentaje
    }

    obtenerLectura()
    {
        return "Humedad: " + this.porcentaje + "%"
    }
}

class SensorLuz
{
    constructor(lux)
    {
        this.lux = lux
    }

    obtenerLectura()
    {
        return "Luz: " + this.lux + " lux"
    }
}

function mostrarLectura(sensor)
{
    return sensor.obtenerLectura()
}

const sH = new SensorHumedad(65)
const sL = new SensorLuz(400)

console.log(mostrarLectura(sH));
console.log(mostrarLectura(sL));
