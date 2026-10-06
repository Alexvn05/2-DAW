const arr1 = [1,2,3,4,5];
console.log(arr1[1]);

console.log("for");
for (let i = 0; i < arr1.length; i++) 
    console.log(arr1[i]);

console.log("for..of");
for (let valor of arr1) 
    console.log(valor);

console.log("for..in");
for (let ind in arr1) console.log(ind + "->"+ arr1[ind])


// 2.1
console.log("-------------------");

const lenguajes = ["Js", "Java", "Python", "PHP", "C#"];
console.log(lenguajes[0]);
console.log(lenguajes[2]);
console.log(lenguajes[(lenguajes.length-1)]);
console.log(lenguajes.length-1);

// 2.2
console.log("-------------------");

const temperatura = [18, 21, 24, 20, 17];
console.log(temperatura[0]);
console.log(temperatura[3]);
temperatura[2] = 25;
console.log(temperatura);
console.log(temperatura[10]);

// 2.3
console.log("-------------------");
const notas = [[7,8,6], [5,4,9], [10,8,7]];


// 3.1
console.log("-------------------");
const colores = ["rojo", "verde", "azul", "amarillo"];
for (let c of colores) console.log(c);

// 3.2
console.log("-------------------");
for (let c1 in colores) console.log("Indice "+ c1+": "+ colores[c1]);

// 3.3
console.log("-------------------");
const ciudades = ["Madrid", "Sevilla", "Valencia", "Bilbao"];
for (let ciu of ciudades) console.log(ciu);

// 3.4
console.log("-------------------");
const notas2 = [7, 3, 5, 9, 4, 8, 2];
for (let n2 of notas2) 
    if (n2 >= 5) 
        console.log(n2); 

// 3.5
console.log("-------------------");
const precios = [10, 25, 8, 12, 15];
let total = 0;
for (let p of precios) total += p;
console.log(total);