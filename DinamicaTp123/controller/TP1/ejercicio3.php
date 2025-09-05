<?php
include_once __DIR__ . '/../encapsulamiento/encapsulado.php';
class usuario3
{


    public function funcion3()
    {
        $metodo = encapsuladorMetodos();

        $string = "No hay nada que mostrar";
        if (isset($metodo['nombre'])) {

            $string = "Hola, yo soy " . $metodo['nombre'] . ", " . $metodo['apellido'] . " tengo " . $metodo['edad'] . " años y vivo en " . $metodo['direccion'];
        }
        return $string;
    }
}

?>