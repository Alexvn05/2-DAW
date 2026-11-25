const saludoBase = {
    nombre: "",
    saludar() {
        return "Bienvenido, "+this.nombre
    }
}

const saludoFormal = Object.create(saludoBase)
saludoFormal.saludar = function() {
    return "Buenos dias, Sra " + this.nombre
}

const saludoInformal = Object.create(saludoBase)

const elena = Object.create(saludoFormal)
elena.nombre = "Elena"

const mario = Object.create(saludoInformal)
mario.nombre = "Mario"

console.log(elena.saludar());
console.log(mario.saludar());
