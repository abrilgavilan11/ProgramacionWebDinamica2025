<?php 
    include_once '../../controller/TP1/ejercicio8.php';
    $obj = new usuarioEstudiante();
    $string = $obj->ejercicio8();
    echo "<p>". $string." </p>";
echo '<a href="index.php">Inicio</a>';

?>