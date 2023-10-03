Escribe un script que muestre si un número almacenado en una variable es par o impar.

<br>

<?php
    # Escribe un script que muestre si un número almacenado en una variable es par o impar.

    $numero = 10;
    if ($numero % 2 == 0) {
        echo "El número $numero es par";
    } else {
        echo "El número $numero es impar";
    }
?>