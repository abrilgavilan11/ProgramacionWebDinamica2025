<?php
include_once __DIR__ . '/../encapsulamiento/encapsulado.php';

class usuarioEdad
{


    public function ejercicio4()
    {
        $string = "No hay nada que mostrar";
        $metodo = encapsuladorMetodos();
        if (isset($metodo['edad'])) {

            $edad = $metodo['edad'];

            if ($edad >= 18) {

                $string = "Usted es mayor de edad";
            } else {

                $string = "Usted es menor de edad";
            }
        }

        return $string;
    }
}
?>