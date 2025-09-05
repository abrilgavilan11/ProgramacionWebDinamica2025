<?php 
    include_once '../../controller/TP1/ejercicio4.php';
    $obj = new usuarioEdad();
    $string = $obj->ejercicio4();

    echo "<p>". $string . " </p>";
   echo '<a href="http://localhost/DinamicaTp123/view/TP1/index.php">Inicio</a>';