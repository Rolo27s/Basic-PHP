Escribe un script que reciba dos números de variables y compruebe si están entre 100 y 200 y devuelva si o no.

<br>

<?php
$a = 205;
$b = 100;

$MIN = 100;
$MAX = 200;

function twoBetween($x, $y)
{
    // indico que usaré las variables globales
    global $MIN, $MAX;

    if ($x >= $MIN && $x <= $MAX && $y >= $MIN && $y <= $MAX) {
        return true;
    }
}

if (twoBetween($a, $b)) {
    echo "El número $a y el número $b (ambos) están entre $MIN y $MAX";
} else {
    echo "El número $a y el número $b (ambos) no están entre $MIN y $MAX";
}

?>