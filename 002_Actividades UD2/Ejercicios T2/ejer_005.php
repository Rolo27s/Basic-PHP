Escribe un script que muestre los 10 primeros números primos.

<br>

<?php
    # Escribe un script que muestre los 10 primeros números primos.
    
    function es_primo($numero) {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    # Usamos un bucle para mostrar los 10 primeros números primos. Se llamará a la función es_primo() y se deberá recibir 10 veces el return true.

    $count = 1;
    $numero = 2;
    
    while ($count <= 10) {
        if (es_primo($numero)) {
            echo $numero. "\n";
            // Cuando se ha encontrado un número primo, se incrementa el contador.
            $count++;
        }
        // Se incrementa el número en 1 hasta que se encuentre un número primo.
        $numero++;
    }
?>