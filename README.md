• Descripción
En esta práctica crearemos y operaremos con arrays.

• Tecnologías utilizadas
Utilizaremos en el lenguaje PHP.

• Objetivos
Creación y utilización de arrays.
Operar con y entre arrays.

• Nivel 1
- Ejercicio 1
Crea un array, añádele 5 números enteros y luego muestrales por pantalla de uno en uno.

- Ejercicio 2
Haz un programa que tenga un array indexado de 6 elementos y después:

Muestre por pantalla el tamaño del array anterior.
Elimine un elemento del array anterior. Comprueba que los índices/claves del array estén normalizados (deben reorganizarse sus índices para que no haya saltos entre índices).
Muestre por última vez el tamaño del array y su contenido.
Ejercicio 3
Crea una función que reciba como parámetros un array de palabras y un carácter. La función nos devuelve true si todas las palabras del array tienen el carácter pasado como segundo parámetro.

Por ejemplo:

Si tenemos [“hola”, “Php”, “Html”] devolverá true si preguntamos por “h” pero falso si preguntamos por “l”.

- Ejercicio 4
Haz un array asociativo que represente información de ti mismo/a. En concreto debe incluir:

nombre
edad
email
comida favorita


• Nivel 2
- Ejercicio 1
Imagina que tienes dos listas de invitados (representados/as únicamente por nombres). Haz un programa que te devuelva:

La lista de invitados en común entre ambas listas.
La mezcla de la lista de invitados (sin repeticiones).
La lista de invitados exclusivos de la primera lista.
La lista de invitados exclusivos de la segunda lista.
Ejercicio 2
Crea un programa que liste las notas de los/as alumnos/as de una clase. Por eso deberemos utilizar un array asociativo donde la clave será el nombre de cada alumno. Cada alumno tendrá 5 notas (valoradas del 0 al 10).

Además, crea una función que, dadas las notas de todos los alumnos/as, nos muestre tanto la media de la nota de cada alumno, como la nota media de la clase entera.

• Nivel 3
- Ejercicio 1
Dado un array de enteros, haz un programa que:

Devuelva cada valor del array elevado al cubo utilizando la función array_map().
- Ejercicio 2
Dado un array de strings, haz un programa que:

Devuelva un array donde sólo estén los strings que tengan un nombre par de caracteres usando la función array_filter().
Ejercicio 3
Dado un array de enteros, haz un programa que nos devuelva la suma de los enteros del array que sean primeros utilizando la función array_reduce().
