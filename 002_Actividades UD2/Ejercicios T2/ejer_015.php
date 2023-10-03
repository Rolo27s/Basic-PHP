Escribe en un script un array de 1000 elementos con el valor elemento0, elemento1, ..., elemento999.

<br><br>

<?php

$array = [];

for ($i = 0; $i < 1000; $i++) {
    $array[$i] = "elemento" . $i;
}

// Así vería el contenido del array. Es el ejercicio 16
/* foreach ($array as $value) {
    echo $value . "<br>";
} */

?>