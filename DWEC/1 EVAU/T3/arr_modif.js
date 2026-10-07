// COPIA DE ARRAYS CON slice()
const arr1 = [4, 5, 6, 7, 9, 0, 4];
console.log(arr1);

const arr2 = arr1.slice();

const arr_aux = arr1;
console.log("Array auxiliar modificado");
arr_aux[2] = "Toledo";
console.log(arr_aux);

console.log("Vemos que ha pasado con arr1 ");
console.log(arr1);

console.log("Vemos que ha pasado con arr2 con slice ");
console.log(arr2);

// CON SLICE COPIAS UN ARRAY Y SI LO MODIFICAS NO SE CAMBIA EL ORIGINAL
// SIN SLICE HACES QUE ESTEN CONECTADOS Y AL MODIFICAR UNO EL OTRO TAMBIEN SE MODIFCIA
console.log("Comprobamos que el slice funciona");
arr2[4] = "Madrid";
console.log("Arr2");
console.log(arr2);

console.log("Arr1");
console.log(arr1);

console.log("-------------------------")

// Creamos un array con un subconjnto de otro array
const arr3 = arr1.slice(2, 4); // Va desde la posicion 2 hasta la 4
console.log(arr3)

arr1[2] = 6; 
// Para buscar elementos se usa indexOf op lastIndexOf
let resul = arr1.indexOf(7)
console.log("El numero 7 se encuentra en la posicion "+(resul));

resul = arr1.indexOf(22)
console.log("El numero 22 se encuentra en la posicion "+(resul));

resul = arr1.lastIndexOf(4)
console.log("Usando lastIndexOf: El numero 4 se encuentra en la posicion "+(resul));

resul = arr1.indexOf(4,1) // El 1 significa que busca el primer 4
console.log("Usando indexOf: El numero 4 se encuentra en la posicion "+(resul));

// ORDENAR ARRAYS
console.log("-------------------------")
const numeros = [3, 5, 1, 9, 10]
numeros.sort();
console.log(numeros);

numeros.reverse;
console.log(numeros);
