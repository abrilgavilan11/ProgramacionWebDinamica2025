<?php
include_once '../../controller/TP1/ejercicio5.php';
$obj = new usuarioEstudios();
$string = $obj->ejercicio5();
echo "<p>". $string ." </p>";
echo '<a href="http://localhost/DinamicaTp123/view/TP1/index.php">Inicio</a>';
