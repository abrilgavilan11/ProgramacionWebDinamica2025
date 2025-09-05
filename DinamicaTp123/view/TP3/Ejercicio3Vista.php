<?php
include_once __DIR__ . '/../../controller/TP3/Ejercicio3.php';
$obj = new jpgViewer();
$bandera = $obj->ejercicio3();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <div class="container d-flex flex-column mx-auto m-5 p-4"
        style="background-color: #b7e6b7ff; color: #456445ff; width: 1000px ">

        <div class="d-flex justify-content-between w-100">
            <h1 style="">La pelicula introducida es</h1>
            <a href="http://localhost/DinamicaTp123/view/TP3/index.php" style="">
                <i class="fa-solid fa-xmark"></i></a>
        </div>
        <br>
        <p><strong>Titulo: </strong> <?php echo $metodo['titulo'] ?></p>
        <p><strong>Actores: </strong> <?php echo $metodo['actores'] ?></p>
        <p><strong>Director: </strong> <?php echo $metodo['director'] ?></p>
        <p><strong>Guión: </strong> <?php echo $metodo['guion'] ?></p>
        <p><strong>Produccion: </strong> <?php echo $metodo['produccion'] ?></p>
        <p><strong>Año: </strong> <?php echo $metodo['anio'] ?></p>
        <p><strong>Nacionalidad: </strong> <?php echo $metodo['nacionalidad'] ?></p>
        <p><strong>Genero: </strong> <?php echo $metodo['genero'] ?></p>
        <p><strong>Duracion: </strong> <?php echo $metodo['duracion'] ?></p>
        <p><strong>Restricciones de edades: </strong> <?php echo $metodo['restriccion'] ?></p>
        <?php   
            if($bandera){
                
                echo (" <img src='http://localhost/DinamicaTp123/view/TP3/". $_FILES['imagen']['name']. "' alt= 'Portada de la pelicula ". $metodo['titulo'] ."' class='img-fluid rounded shadow mt-3' style='max-width: 200px; height: auto'/> " );
            }
            else{
                echo ' <p> <strong>Portada no cargada</strong> </p>';
            }

        ?>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>