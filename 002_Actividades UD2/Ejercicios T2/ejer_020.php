Crea un script PHP que, a partir de una variable que almacene un entero, cree un cuadrado de asteriscos con el ancho y
alto indicado en el número de la variable.

<br><br>

<?php
$ancho = 12;
$alto = 3;

for ($i = 0; $i < $alto; $i++) {
    for ($j = 0; $j < $ancho; $j++) {
        echo "*";
    }
    echo "<br>";
}


?>