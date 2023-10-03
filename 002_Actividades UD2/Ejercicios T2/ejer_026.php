Escribe un PHP que reciba un valor numérico decimal y diga a qué nota textual
corresponde (suspenso [de 0 a 5], aprobado [de 6 a 7], notable [de 7 a 9],
sobresaliente [de 9 a 10] o matrícula de honor [10]).

<br><br>

<?php
/* 
Escribe un PHP que reciba un valor numérico decimal y diga a qué nota textual
corresponde (suspenso [de 0 a 5], aprobado [de 6 a 7], notable [de 7 a 9],
sobresaliente [de 9 a 10] o matrícula de honor [10]).
*/

$nota = 7.2;

if ($nota >= 0 && $nota <= 5) {
    echo "Suspenso";
} elseif ($nota >= 6 && $nota <= 7) {
    echo "Aprobado";
} elseif ($nota >= 7 && $nota <= 9) {
    echo "Notable";
} elseif ($nota >= 9 && $nota <= 10) {
    echo "Sobresaliente";
} else {
    echo "Matrícula de honor";
}

// También se puede usar un switch

?>