<?php
include_once __DIR__ . '/../encapsulamiento/encapsulado.php';

class usuarioyContra
{


    public function ejercicio3()
    {
        $metodo = encapsuladorMetodos();
        $string = "";
        $datos = [

            0 => ["usuario" => "Naxo", "contrasenia" => "Fai-5521"],
            1 => ["usuario" => "Joaquin", "contrasenia" => "Hola1234"],
            2 => ["usuario" => "Ignacio", "contrasenia" => "Facultad24"],
        ];
        $bandera = false;


        if (isset($metodo['usuario']) && $metodo['usuario'] && $metodo['contrasenia']) {

            $i = 0;
            while ($bandera == false && $i < 3) {

                if ($datos[$i]['usuario'] == $metodo['usuario'] && $datos[$i]['contrasenia'] == $metodo['contrasenia']) {

                    $string = "Bienvenido " . $datos[$i]['usuario'];
                    $bandera = true;
                }
                $i++;
            }
        }

        if ($bandera == false) {

            $string = "Usuario no encontrado";
        }
        return $string;

    }
}