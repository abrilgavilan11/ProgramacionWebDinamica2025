<?php
function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
    else
        if(!empty($_GET)) {
            $_AAux =$_GET;
        }
    if (count($_AAux)){
        foreach ($_AAux as $indice => $valor) {
            if ($valor=="")
                $_AAux[$indice] = 'null'	;
        }
    }
    return $_AAux;
}

/**
 * Versión especial de data_submitted() para manejar archivos
 * Devuelve un array con los datos relevantes del archivo
 */
function data_file_submitted($inputName = "archivo") {
    $resultado = null;

    if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] == UPLOAD_ERR_OK) {
        $resultado = [
            "name" => $_FILES[$inputName]['name'],
            "tmp_name" => $_FILES[$inputName]['tmp_name'],
            "size" => $_FILES[$inputName]['size'],
            "type" => $_FILES[$inputName]['type'],
            "error" => $_FILES[$inputName]['error']
        ];
    } elseif (isset($_FILES[$inputName])) {
        // Si hubo error en la subida
        $resultado = [
            "name" => $_FILES[$inputName]['name'],
            "error" => $_FILES[$inputName]['error']
        ];
    }

    return $resultado;
}


spl_autoload_register(function ($clase) {
   // echo "Cargamos la clase  ".$clase."<br>" ;
    $directorys = array(
        $GLOBALS['ROOT'].'modelo/',
        $GLOBALS['ROOT'].'control/',
        $GLOBALS['ROOT'].'modelo/conector/',
        $GLOBALS['ROOT'].'modelo/otrasclases/',
    );
    // print_r($directorys) ;
    foreach($directorys as $directory){
        if(file_exists($directory.$clase . '.php')){
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory.$clase . '.php');
            return;
        }
    }


});

?>
