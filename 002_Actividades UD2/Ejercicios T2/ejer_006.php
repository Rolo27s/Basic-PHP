6. Escribe un script que devuelva si un número es divisible por 3.

<br>

<?php

function esDivisiblePor3($numero)
{
    if ($numero % 3 == 0) {
        return true;
    } else {
        return false;
    }
}

$num1 = 9;
$num2 = 13;

if (esDivisiblePor3($num1)) {
    echo "El número $num1 es divisible por 3";
} else {
    echo "El número $num1 no es divisible por 3";
}

echo "<br>";

if (esDivisiblePor3($num2)) {
    echo "El número $num2 es divisible por 3";
} else {
    echo "El número $num2 no es divisible por 3";
}

?>