Escribe una función en el script anterior que devuelva por pantalla cada elemento del array anterior separado por un
espacio.Escribe en un script un array de 10 elementos con el valor 0, 1, ... 9.

<br><br>

<?php
$array = [];

for ($i = 0; $i < 10; $i++) {
    $array[$i] = $i;
}

// veo el contenido del array
foreach ($array as $value) {
    echo $value . " ";
}

?>