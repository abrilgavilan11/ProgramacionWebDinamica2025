<?php

class pdfsViewer
{


    public function Ejercicio1()
    {


        $directorio = __DIR__ . '/../../view/TP3/';
        $string = "El archivo no pudo ser cargado";
        if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {

            if ($_FILES['archivo']['type'] == "application/msword" || $_FILES['archivo']['type'] == "application/pdf") {

                if ($_FILES['archivo']['size'] / (1024 * 1024) <= 2) {
                    if ((copy($_FILES['archivo']['tmp_name'], $directorio . $_FILES['archivo']['name']))) {

                        $string = $_FILES['archivo']['name'];
                    }
                }
            }
        }
        return $string;
    }
}
?>