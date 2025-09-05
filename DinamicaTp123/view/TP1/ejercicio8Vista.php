<?php 
    include_once '../../controller/TP1/ejercicio8.php';
    $obj = new usuarioEstudiante();
    $string = $obj->ejercicio8();
    echo "<p>". $string." </p>";
    echo '<a href="http://localhost/DinamicaTp123/view/TP1/index.php">Inicio</a>';

?>