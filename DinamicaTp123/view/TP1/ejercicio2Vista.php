<?php

include_once '../../controller/TP1/cantidadHorasSemana.php';

$obj = new CantidadHorasSemana();
$horasTotales = $obj->horas();
echo $horasTotales . "<br> horas totales registradas <br>";
echo '<a href="index.php">Inicio</a>';
