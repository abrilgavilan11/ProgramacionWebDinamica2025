<?php

include_once __DIR__ . '/../../controller/TP1/vernumero.php';
$objeto = new positivoNegativo();
$string = $objeto->ejercicio1();
echo    "<p>". $string . " </p>";
echo '<a href="http://localhost/DinamicaTp123/view/TP1/index.php">Inicio</a>';
