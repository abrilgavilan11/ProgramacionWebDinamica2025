<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <?php include_once '../estructura/header.php' ?>

    <h1>Trabajo practico</h1>
    <h2>Punto 1</h2>
    <form action="ejercicio1Vista.php" method="post">

        <input type="number" name="numerito" id="numerito">
        <input type="submit" value="listo">
    </form>


    <br>


    <p>______________________________________________________________________________________________________________________________
    </p>
    <h2>Punto 2</h2>
    <h3>Horas semanales</h3>

    <form method="get" action="ejercicio2Vista.php">
        <label for="lunes">Lunes</label>
        <input type="number" name="lunes" id="lunes" value="0">
        <br>
        <label for="martes">Martes</label>
        <input type="number" name="martes" id="martes" value="0">
        <br>

        <label for="miercoles">Miercoles</label>
        <input type="number" name="miercoles" id="miercoles" value="0">
        <br>

        <label for="jueves">Jueves</label>
        <input type="number" name="jueves" id="jueves" value="0">
        <br>

        <label for="viernes">Viernes</label>
        <input type="number" name="viernes" id="viernes" value="0">
        <br>

        <input type="submit" value="Enviar">
    </form>

    <p>______________________________________________________________________________________________________________________________
    </p>
    <h2>Punto 3</h2>
    <h3>Mayor o menor</h3>

    <form action="ejercicio3Vista.php" method="get">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">

        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido">

        <label for="edad">Edad: </label>
        <input type="text" name="edad" id="edad">

        <label for="direccion">Direccion: </label>
        <input type="text" name="direccion" id="direccion">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <!-- La diferencia radica en el url. Con el get la informacion como el nombre y apellido
     aparece directamente en el url mientras que con el POST no -->

    <p>______________________________________________________________________________________________________________________________
    </p>
    <h2>Punto 4</h2>
    <h3>Edades</h3>
    <form action="ejercicio4Vista.php" method="get">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">

        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido">

        <label for="edad">Edad: </label>
        <input type="text" name="edad" id="edad">

        <label for="direccion">Direccion: </label>
        <input type="text" name="direccion" id="direccion">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <p>______________________________________________________________________________________________________________________________
    </p>
    <h2>Punto 5</h2>
    <h3>Sexo y estudios</h3>
    <form action="ejercicio5Vista.php" method="get">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">

        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido">

        <label for="edad">Edad: </label>
        <input type="text" name="edad" id="edad">

        <label for="direccion">Direccion: </label>
        <input type="text" name="direccion" id="direccion">

        <h4>Estudios</h4>
        <label for="sinEstudios">Sin estudios</label>
        <input type="radio" name="estudios" id="sinEstudios" value="ninguno">

        <label for="primarios">Estudios primarios</label>
        <input type="radio" name="estudios" id="primarios" value="primarios">

        <label for="secundario">Estudios secundarios</label>
        <input type="radio" name="estudios" id="secundario" value="secundarios">


        <label for="">Sexo</label>
        <select name="sexo" id="sexo">
            <option value="">Seleccione un sexo</option>
            <option value="mujer">mujer</option>
            <option value="hombre">hombre</option>
            <option value="otro">otro</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <p>______________________________________________________________________________________________________________________________
    </p>
    <h2>Punto 6</h2>
    <h3>Deportes</h3>
    <form action="ejercicio6Vista.php" method="get">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">

        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido">

        <label for="edad">Edad: </label>
        <input type="text" name="edad" id="edad">

        <label for="direccion">Direccion: </label>
        <input type="text" name="direccion" id="direccion">

        <h4>Estudios</h4>
        <label for="sinEstudios">Sin estudios</label>
        <input type="radio" name="estudios" id="sinEstudios" value="ninguno">

        <label for="primarios">Estudios primarios</label>
        <input type="radio" name="estudios" id="primarios" value="primarios">

        <label for="secundario">Estudios secundarios</label>
        <input type="radio" name="estudios" id="secundario" value="secundarios">

        <label for="">Sexo</label>
        <select name="sexo" id="sexo">
            <option value="">Seleccione un sexo</option>
            <option value="mujer">mujer</option>
            <option value="hombre">hombre</option>
            <option value="otro">otro</option>
        </select>
        <br>
        <label for="deportes[]">Deportes que practica</label>
        <label for="deportes[]">Futbol</label>
        <input type="checkbox" name="deportes[]" value="Futbol">

        <label for="deportes[]">Basket</label>
        <input type="checkbox" name="deportes[]" value="Basket">
        <label for="deportes[]">Tenis</label>
        <input type="checkbox" name="deportes[]" value="Tenis">
        <label for="deportes[]">Voley</label>
        <input type="checkbox" name="deportes[]" value="Voley">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <p>______________________________________________________________________________________________________________________________
    </p>
    <h2>Punto 7</h2>
    <h3>Calculadora mini</h3>

    <form action="ejercicio7Vista.php" method="post">
        <input type="text" name="number1" id="number1">
        <input type="text" name="number2" id="number2">
        <select name="operacion" id="operacion">

            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>
            <input type="submit" value="enviar">
        </select>
    </form>

    <p>______________________________________________________________________________________________________________________________
    </p>
    <h2>Punto 8</h2>
    <h3>Cine</h3>

    <form action="ejercicio8Vista.php" method="post">
        <label for="esEstudiante">Es estudiante?</label>
        <input type="radio" name="esEstudiante" id="esEstudiante" value="si">
        <br>

        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad">

        <input type="reset" value="Reseteo">
        <input type="submit" value="Enviar">
    </form>


    <?php include_once '../estructura/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>