<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

    include_once __DIR__ . '/../../controller/TP3/Ejercicio1.php';
    $obj = new pdfsViewer();
    $string = $obj->Ejercicio1();
    echo "<a href=http://localhost/DinamicaTp123/view/TP3/".$string."> Enlace </p>";
echo '<a href="http://localhost/DinamicaTp123/view/TP3/index.php">Inicio</a>';