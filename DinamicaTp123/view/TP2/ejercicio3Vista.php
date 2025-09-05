<?php 
    include_once __DIR__.  '/../../controller/TP2/verificaPass.php';
    $obj = new usuarioyContra();
    $string = $obj->ejercicio3();
    echo "<p>" . $string." </p>";
echo '<a href="http://localhost/DinamicaTp123/view/TP2/index.php">Inicio</a>';
