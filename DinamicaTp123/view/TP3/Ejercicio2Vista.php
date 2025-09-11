<?php

include_once '../../controller/TP3/Ejercicio2.php';
$obj = new textoViewer();
$string = $obj->Ejercicio2();
echo "<p>" . $string . "</p>";
echo '<a href="index.php">Inicio</a>';
