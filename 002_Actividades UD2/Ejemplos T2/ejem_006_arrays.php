<?PHP
/* Métodos internos de arrays en PHP 
    1. array_push(): Agrega uno o más elementos al final de un array. 
    2. array_pop(): Elimina y devuelve el último elemento de un array. 
    3. array_shift(): Elimina y devuelve el primer elemento de un array. 
    4. array_unshift(): Agrega uno o más elementos al principio de un array. 
    5. count(): Devuelve el número de elementos en un array. 
    6. array_merge(): Combina dos o más arrays en uno solo. 
    7. array_slice(): Extrae una parte de un array. 
    8. array_search(): Busca un valor específico en un array y devuelve la clave correspondiente si se encuentra. 
    9. in_array(): Comprueba si un valor existe en un array. 
    10. sort(): Ordena un array en orden ascendente.
    11. rsort(): Ordena un array en orden descendente. 
    12. array_keys(): Devuelve todas las claves de un array. 
    13. array_values(): Devuelve todos los valores de un array. 
    14. array_reverse(): Invierte el orden de los elementos en un array. 
    15. array_unique(): Elimina valores duplicados de un array. 
    16. array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados. 
    
    Más métodos en https://www.w3schools.com/php/php_ref_array.asp
    En W3schools, en PHP, los métodos están abajo del todo en la sección de PHP Reference.
*/ 
    

// Ejemplo del uso del array_map()
$miArray = array(   "clave1"=> 5,
                    "clave2" => 10,
                    "clave3" => 15,
                    "clave4" => 20,
                    "clave5" => 25,
                    "clave6" => 30);

// Definir una función que multiplica por dos el valor
function multiplicarPorDos($valor) {
return $valor * 2;
}

// Aplicar la función a cada valor del array usando array_map
$arrayResultado = array_map("multiplicarPorDos", $miArray);

// $arrayResultado ahora contiene los valores originales multiplicados por dos
print_r($arrayResultado);

print("<br>");

// Ejemplo de array_merge
$a1=array("red","green", "blue");
$a2=array("blue","yellow");
$mergedArray = array_merge($a1,$a2);
print_r($mergedArray);

print("<br>");

// Para tener valores únicos en un array
$uniqueArray = array_unique($mergedArray);

print_r($uniqueArray);
?>