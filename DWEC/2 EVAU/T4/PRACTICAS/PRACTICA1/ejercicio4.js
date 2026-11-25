const recursoMuseo = {
    consultarUbicacion: function() {
        return "Sala principal"
    }
}

const obraDigital = Object.create(recursoMuseo)
obraDigital.titulo = "Paisaje interactivo"
obraDigital.formato = "Animacion"
obraDigital.mostrarFormato = function() {
    return obraDigital.formato
}

console.log(obraDigital.titulo);
console.log(obraDigital.mostrarFormato());
console.log(obraDigital.consultarUbicacion());
console.log(Object.getPrototypeOf(obraDigital) === recursoMuseo);

