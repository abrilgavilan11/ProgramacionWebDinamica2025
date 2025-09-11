<?php 
    include_once __DIR__.  '/../../controller/TP2/verificaPass.php';
    $obj = new usuarioyContra();
    $string = $obj->ejercicio3();
    echo "<p>" . $string." </p>";
echo '<a href="index.php">Inicio</a>';
