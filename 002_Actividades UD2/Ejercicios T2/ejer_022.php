Programa un PHP que reciba un número entero y muestre los factores primos que lo componen.

<br><br>

<?php
$numero = 6;

for ($i = 2; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        echo $i . " ";
    }
}

?>