Escribe un script que muestre los 10 primeros números de la sucesión de Fibonacci.

<br>

<?php
    # Escribe un script que muestre los 10 primeros números de la sucesión de Fibonacci.

    function fibonacci($n) {
        if ($n <= 1) {
            return $n;
        } else {
            return fibonacci($n - 1) + fibonacci($n - 2);
        }
    }
    
    print("<br>");

    for ($i = 1; $i <= 10; $i++) {
        echo fibonacci($i) . "<br>";
    }
?>