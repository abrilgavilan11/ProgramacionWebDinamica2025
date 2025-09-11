<?php 
    include_once '../../controller/TP1/ejercicio4.php';
    $obj = new usuarioEdad();
    $string = $obj->ejercicio4();

    echo "<p>". $string . " </p>";
echo '<a href="index.php">Inicio</a>';