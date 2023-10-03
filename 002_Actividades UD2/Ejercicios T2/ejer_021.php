Escriba un PHP que reciba un número flotante y muestre 2 números: el primero será
tantos ceros como valor tenga la parte entera y el segundo será tantos unos como
valor la parte decimal.
Ejemplo: si recibe un 3,5 mostrará: 000 y 11111.

<br><br>

<?php
$numero = 3.5;

$entero = (int) $numero;

// Paso el decimal a entero y uso esta variable en el bucle for
$decimal = ($numero - $entero) * 10;

for ($i = 0; $i < $entero; $i++) {
    echo "0";
}

echo " y ";

for ($j = 0; $j < $decimal; $j++) {
    echo "1";
}

?>