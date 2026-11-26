class GestionNotificaciones
{
    static instancia = null
    constructor()
    {
        if (GestionNotificaciones.instancia !== null)
        {
            return GestionNotificaciones.instancia
        }
        this.notificaciones = []
        GestionNotificaciones.instancia = this
    }

    añadirNotificaciones(notificacion)
    {
        this.notificaciones.push(notificacion)
    }

    consultarNotificaciones()
    {
        return this.notificaciones
    }

    obtenerNumero()
    {
        return this.notificaciones.length
    }

    eliminarNotificaciones()
    {
        this.notificaciones = []
    }
}

const gestor1 = new GestionNotificaciones()
const gestor2 = new GestionNotificaciones()

gestor1.añadirNotificaciones("Bienvenido")
gestor1.añadirNotificaciones("Segundo mensaje")
gestor1.añadirNotificaciones("Tercer mensaje")

console.log(gestor2.consultarNotificaciones());
console.log(gestor2.obtenerNumero());

gestor2.eliminarNotificaciones();

console.log(gestor1.consultarNotificaciones());
console.log(gestor1.obtenerNumero());