Escribe en un script que reciba un número entero de segundos y lo convierta en años, días, horas y segundos.

<br><br>

<?php
$segundos = 134568783;
$segIni = $segundos;

$años = floor($segundos / 31536000);
$segundos = $segundos % 31536000;

$dias = floor($segundos / 86400);
$segundos = $segundos % 86400;

$horas = floor($segundos / 3600);
$segundos = $segundos % 3600;

$minutos = floor($segundos / 60);
$segundos = $segundos % 60;

echo "segundos: $segIni <br>";

echo $años . " años, " . $dias . " días, " . $horas . " horas, " . $minutos . " minutos y " . $segundos . " segundos.";

?>