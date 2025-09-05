<?php
include_once __DIR__ . '/../encapsulamiento/encapsulado.php';
class CantidadHorasSemana
{


    public function horas()
    {

        $metodo = encapsuladorMetodos();
        $resp = [];
        $horasTotales = 0;

        $resp[0] = $metodo['lunes'];
        $resp[1] = $metodo['martes'];
        $resp[2] = $metodo['miercoles'];
        $resp[3] = $metodo['jueves'];
        $resp[4] = $metodo['viernes'];

        for ($i = 0; $i < count($resp); $i++) {

            $horasTotales += $resp[$i];
        }

        return $horasTotales;
    }

}


?>