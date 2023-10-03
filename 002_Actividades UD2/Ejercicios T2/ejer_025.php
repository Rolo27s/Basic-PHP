Programa un PHP que tenga la variable entera (recuerda que los enteros pueden ser
positivos y negativos) $dias que representa a los días que han pasado desde el 1 de enero del año 2000 (ascendentemente
los positivos y descendentemente los negativos) y procese a qué fecha corresponde.
Ejemplo: si recibe un 7305 mostrará: 1-1-2020.

<br><br>

<?php
// Variable que representa los días transcurridos desde el 1 de enero del año 2000
$dias = 7305; // Cambia este valor según se quiera

// Fecha de referencia (1 de enero del año 2000). $fecha serán los segundos que han pasado desde el 1 de enero del año 1970 00:00:00 GMT
$fecha = strtotime("2000-01-01");

// La función strtotime permite transformar una cadena de caracteres en una fecha. Debe tener ese formato YYYY-MM-DD. Mide el tiempo en segundos desde el 1 de enero del año 1970 00:00:00 GMT en segundos.

// Calcula la fecha correspondiente sumando o restando días según el valor de $dias

// Para usar la misma unidad de medida voy a pasar los días a segundos
$diasSeg = $dias * 24 * 60 * 60;

$fecha_resultante = $fecha + $diasSeg;

// Formatea la fecha resultante en un formato legible
$fecha_formateada = date("Y-m-d", $fecha_resultante);
// https://www.w3schools.com/php/func_date_date.asp

// Muestra la fecha correspondiente
echo "Los $dias días desde el 1 de enero del 2000 corresponden a la fecha: $fecha_formateada";
?>