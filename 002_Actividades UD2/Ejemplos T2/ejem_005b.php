<?php
    // Llama cada vez que se incluye
    include "ejem_005a.php";
    include "ejem_005a.php";
    
    # Se ve dos veces
    
    // Llama si no ha sido llamado con anterioridad
    include_once "ejem_005a.php";
    include_once "ejem_005a.php";
    include_once "ejem_005a.php";
    
    # Se ve una vez
    
    // Llama cada vez que se requiere
    require "ejem_005a.php";
    require "ejem_005a.php";
    
    # Se ve dos veces
    
    // Llama si no ha sido requerido con anterioridad
    require_once "ejem_005a.php";
    require_once "ejem_005a.php";
    require_once "ejem_005a.php";
    
    # Se ve una vez
    // require_once es la opción más simple y segura.
?>