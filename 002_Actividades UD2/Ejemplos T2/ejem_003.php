<?php
    define("PERSONA" , "Pepito");

    $persona = "Fran";
    echo "Hola $persona<br>"; // Esto es correcto.
    echo 'Hola $persona<br>'; // Esto no leería correctamente la variable $persona.
    echo "Hola $PERSONA<br>"; // Vemos que para constantes no se hace referencia a la variable.

    // Probaremos generar una función para luego leer la salida. Esto no es correcto.
    function saludar(){
        return "María";
    }
     echo "Hola saludar()<br>";

     // La manera correcta de hacer esta función es:
     function saludarBien($persona){
        echo "Hola $persona<br>";
     }
     saludarBien("Pepito");
?>