<?php

include_once '../../controller/TP1/cantidadHorasSemana.php';

$obj = new CantidadHorasSemana();
$horasTotales = $obj->horas();
echo $horasTotales . "<br> horas totales registradas <br>";
echo '<a href="http://localhost/DinamicaTp123/view/TP1/index.php">Inicio</a>';
