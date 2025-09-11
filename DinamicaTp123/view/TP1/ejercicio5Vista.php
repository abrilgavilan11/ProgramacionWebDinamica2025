<?php
include_once '../../controller/TP1/ejercicio5.php';
$obj = new usuarioEstudios();
$string = $obj->ejercicio5();
echo "<p>". $string ." </p>";
echo '<a href="index.php">Inicio</a>';
