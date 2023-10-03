Crea un PHP que reciba un número flotante de días y lo convierta en años, días, horas, segundos y milisegundos.

<br><br>

<?php
$dias = 465.25;

$años = floor($dias / 365.25);
$dias = $dias % 365.25;

$horas = floor($dias / 24);
$dias = $dias % 24;

$minutos = floor($dias / 60);
$dias = $dias % 60;

$segundos = floor($dias);
$dias = $dias % 60;

$milisegundos = floor($dias * 1000);
$dias = $dias % 1000;

echo $años . " años, " . $dias . " días, " . $horas . " horas, " . $minutos . " minutos, " . $segundos . " segundos y " . $milisegundos . " milisegundos.";

?>