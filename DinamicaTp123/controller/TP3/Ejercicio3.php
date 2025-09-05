<?php
include_once __DIR__ . '/../encapsulamiento/encapsulado.php';
$metodo = encapsuladorMetodos();
class jpgViewer
{


    public function ejercicio3()
    {


        $dir = __DIR__ . '/../../view/TP3/';
        $bandera = false;
        if (isset($_FILES['imagen']) && $_FILES['imagen']['type'] == "image/jpeg" && $_FILES['imagen']['error'] == 0) {

            if (copy($_FILES['imagen']['tmp_name'], $dir . $_FILES['imagen']['name'])) {
                $bandera = true;
            }

        }
        return $bandera;
    }
}
?>