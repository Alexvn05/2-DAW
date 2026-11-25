function crearContadorAccesos(nombrePagina) 
{
    let contador = 0;
    return {
        registrarAcceso: () => contador++,
        consultarAccesos: () => contador,
        consultarPagina: () => nombrePagina,
        reiniciarAccesos: () => contador = 0
    }
}

const inicio = crearContadorAccesos("Inicio");
inicio.registrarAcceso();
inicio.registrarAcceso();
inicio.registrarAcceso();
console.log(inicio.consultarAccesos());
inicio.reiniciarAccesos();
console.log(inicio.consultarAccesos());
console.log(inicio.contador);
console.log(inicio.nombrePagina); 


