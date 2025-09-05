<?php

class textoViewer
{

    public function Ejercicio2()
    {

        $dir = __DIR__ . '/../../view/TP3/';
        $string = "";
        if (isset($_FILES['archivo2']) && $_FILES["archivo2"]['type'] == "text/plain" && $_FILES["archivo2"]['error'] == 0) {

            if (copy($_FILES['archivo2']['tmp_name'], $dir . $_FILES['archivo2']['name'])) {

                $string = file_get_contents($dir . $_FILES['archivo2']['name']);
            } else {
                $string = "El archivo no pudo ser copiado";
            }
        } else {
            $string = "El archivo no pudo ser cargado o no es de texto plano";
        }
        return $string;
    }
}
?>