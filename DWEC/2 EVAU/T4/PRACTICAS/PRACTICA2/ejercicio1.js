class Configuracion
{
    static instancia = null
    constructor()
    {
        if (Configuracion.instancia !== null)
        {
            return Configuracion.instancia
        }
        this.idioma = "Español"
        this.temaVisual = "Claro"
        this.tamañoFuente = 16

        Configuracion.instancia = this
    }
}

const config1 = new Configuracion()
const config2 = new Configuracion()

config1.idioma = "Ingles"
config1.temaVisual = "Oscuro"
config1.tamañoFuente = 40

console.log(config2.idioma);
console.log(config2.temaVisual);
console.log(config2.tamañoFuente);
