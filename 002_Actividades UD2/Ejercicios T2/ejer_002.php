Desarrolla un script que utilice un array y lo muestre escrito por líneas en la web.

<br>

<?php
    $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach ($array as $value) {
        echo $value."<br>";
    }
?>