const numeros = [9, 2, 8, 4, 5, 0, 0, 10];
console.log(numeros);

console.log("filter");
const arr_aux = numeros.filter(elem => elem > 5);

let saludo = "Hola";
console.log(saludo[0]);

const ciudades = ["Madrid", "Sevilla", "Malaga", "Cadiz", "Murcia"];
const con_M = ciudades.filter(ciu => ciu[0] == "M");
console.log(con_M);

console.log("Ejemplo de map");
const palabras = ["Casa", "Piedra", "Palo", "Hormiga"];
const plur = palabras.map(pal => pal + "s");
console.log(plur);

const n2 = [2, 15, 4, 95, 36, 32, 29, 18, 95, 14, 87, 95, 70, 12, 76, 55, 5, 4, 12, 28];
console.log(n2);

const n2Pares = n2.map(num => num % 2 === 0 ? num : num * 2);
console.log(n2Pares);

const numeros_a_sumar = [2, 5, 10, 8];
const resul = numeros_a_sumar.reduce((acu, elem) => (acu + elem));
console.log("El resultado de sumar es: "+resul);
