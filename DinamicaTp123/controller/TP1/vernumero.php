<?php
include_once __DIR__ . '/../encapsulamiento/encapsulado.php';

class positivoNegativo
{

    public function ejercicio1()
    {


        $metodo = encapsuladorMetodos();
        $resp = "No se encontró numero";
        if (isset($metodo['numerito'])) {

            $numerito = $metodo['numerito'];

            if ($numerito > 0) {
                $resp = "Positivo";
            } elseif ($numerito == 0) {
                $resp = "Cero";
            } elseif ($numerito < 0) {
                $resp = "Negativo";
            }

        }
        return $resp;

    }

}
?>