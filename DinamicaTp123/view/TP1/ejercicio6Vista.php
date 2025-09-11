<?php
include_once __DIR__ .  '/../../controller/TP1/ejercicio6.php';
$obj = new usuarioDeportes();
$string = $obj->ejercicio6();
echo "<p>".$string."</p>";
echo '<a href="index.php">Inicio</a>';
