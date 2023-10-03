Escribe un script que reciba un número de 4 dígitos (por ejemplo, 1347) y lo devuelva descompuesto por pantalla como:
Unidades de millar: 1000, centenas: 300, decenas: 40, unidades: 7.

<br>
<br>

<?php
$x = 1347;

$millares = $x / 1000;
$x = $x % 1000;

$centenas = $x / 100;
$x = $x % 100;

$decenas = $x / 10;
$x = $x % 10;

// De esta manera le quito el resto y multiplico según la cantidad de decenas
$millares = floor($millares) * 1000;
$centenas = floor($centenas) * 100;
$decenas = floor($decenas) * 10;

echo "Unidades de millar: $millares, centenas: $centenas, decenas: $decenas, unidades: $x";

?>