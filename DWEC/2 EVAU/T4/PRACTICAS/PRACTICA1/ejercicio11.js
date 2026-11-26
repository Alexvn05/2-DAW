const recompensaBase = {
    compras: 0,
    calcularRecompensa: function() {
        throw new Error("calcularRecompensa() es abstracto: debe implementarse en el objeto derivado")
    }
}

const recompensaBronce = Object.create(recompensaBase);
recompensaBronce.compras = 200;
recompensaBronce.calcularRecompensa = function () {
    return this.compras * 0.05;
};

const recompensaOro = Object.create(recompensaBase);
recompensaOro.compras = 200;
recompensaOro.calcularRecompensa = function () {
    return this.compras * 0.10;
};

console.log("Recompensa bronce: " + recompensaBronce.calcularRecompensa());
console.log("Recompensa oro: " + recompensaOro.calcularRecompensa()); 

const recompensaSinDefinir = Object.create(recompensaBase);
recompensaSinDefinir.compras = 200;
// console.log(recompensaSinDefinir.calcularRecompensa()); 
// Lanzaría un Error: al no tener implementación propia, se ejecuta la versión
// abstracta heredada de recompensaBase, que lanza la excepción.