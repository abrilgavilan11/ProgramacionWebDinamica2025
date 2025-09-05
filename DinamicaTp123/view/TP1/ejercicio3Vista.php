<?php
    include_once '../../controller/TP1/ejercicio3.php';
    $obj = new usuario3();
    $texto = $obj->funcion3();

    echo "<p>". $texto .  "</p>";
echo '<a href="http://localhost/DinamicaTp123/view/TP1/index.php">Inicio</a>';