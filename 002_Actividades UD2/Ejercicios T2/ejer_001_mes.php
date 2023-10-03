Desarrolla un script que utilizando una variable que represente al número de mes y
devuelva el nombre del mes y el número de días de dicho mes (sin tener en cuenta
los bisiestos).

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mes = $_POST["mes"];

    // Array con los nombres de los meses
    $nombresMeses = [
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];

    // Array con el número de días en cada mes
    $diasMeses = [
        31, 28, 31, 30, 31, 30,
        31, 31, 30, 31, 30, 31
    ];

    // Verifica si el mes es válido
    if ($mes >= 1 && $mes <= 12) {
        $nombreMes = $nombresMeses[$mes - 1];
        $dias = $diasMeses[$mes - 1];
        echo "El mes seleccionado es $nombreMes y tiene $dias días.";
    } else {
        echo "Número de mes no válido. Por favor, ingrese un número entre 1 y 12.";
    }
}
?>