<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>TP 2</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>


    <?php include_once '../estructura/header.php' ?>

    <h2>Ejercicio 2</h2>

    <form action="" method="get" id="formularioPrueba">

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
    <h2>Ejercicio 3 -a,c,b</h2>

    <div class="container bg-secondary p-3 needs-validation" novalidate style="width : 400px">
        <form action="ejercicio3Vista.php" method="post" id="prueba3" onsubmit="return verificacion3()"
            class="bg-light m-3 d-flex flex-column align-items-center shadow-lg" style="padding: 40px 25px 50px 40px">
            <h3 class="mb-4">Member login</h3>

            <div class="mb-3 w-100 input-group">
                <span class="input-group-text"><i class="fa-solid fa-user" style="border-right: none"></i></span>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username"
                    name="usuario" style="border-left: none">
            </div>

            <div class="mb-3 w-100 input-group">
                <span class="input-group-text" style="border-right: none"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Password"
                    style="border-left: none">
            </div>
            <button type="submit" class="btn btn-success w-100">Login</button>

        </form>

    </div>

    <p>______________________________________________________________________________________________________________________________
    </p>
    <h2>Ejercicio 4</h2>


    <div class="navbar border w-75 p-2 mb-4">
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
            <i class="fa-solid fa-pen-to-square"></i>
            <span class="fs-4">Cinem@s</span>
        </a>
    </div>

    <div class="container w-75 d-flex">

        <form action="ejercicio4.php" method="get" class="d-flex flex-wrap gap-3 needs-validation" novalidate
            style="font-family: Arial, sans-serif">

            <div class="w-100 d-flex gap-5">
                <div class="w-100 d-flex flex-column">
                    <h5>Titulo</h5>
                    <input type="text" name="titulo" id="titulo" placeholder="Titulo"
                        class="border border-secondary p-3 form-control" style="height: 40px" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">El titulo es necesario</div>
                </div>

                <div class="w-100 d-flex flex flex-column">
                    <h5>Actores</h5>
                    <input type="text" name="actores" id="actores" placeholder="Actores"
                        class="border border-secondary p-3 form-control" style="height: 40px" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Ingrese minimo un actor</div>
                </div>
            </div>


            <div class="w-100 d-flex gap-5">
                <div class="w-100 d-flex flex-column">
                    <h5>Director</h5>
                    <input type="text" name="director" id="director" placeholder="Director"
                        class="border border-secondary p-3 form-control" style="height: 40px" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Ingrese el director</div>
                </div>

                <div class="w-100 d-flex flex flex-column">
                    <h5>Guion</h5>
                    <input type="text" name="guion" id="guion" placeholder="Guion"
                        class=" form-control border border-secondary p-3" style="height: 40px" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Ingrese el guión</div>
                </div>
            </div>


            <div class="w-100 d-flex gap-5">
                <div class="w-100 d-flex flex-column">
                    <h5>Produccion</h5>
                    <input type="text" name="produccion" id="produccion"
                        class="form-control border border-secondary p-3" style="height: 40px" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Ingrese por quien fue hecho el guión</div>
                </div>

                <div class="w-100 d-flex flex flex-column">
                    <h5>Año</h5>
                    <input type="number" name="anio" id="anio" style="width: 120px; height: 40px"
                        class="form-control border border-secondary" required max="9999">
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Ingrese un año correcto</div>
                </div>
            </div>

            <div class="w-100 d-flex gap-5">
                <div class="w-100 d-flex flex-column">
                    <h5>Nacionalidad</h5>
                    <input type="text" name="nacionalidad" id="nacionalidad"
                        class="form-control border border-secondary p-3" style="height: 40px" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Ingrese una nacionalidad valida</div>
                </div>

                <div class="w-100 d-flex flex flex-column">
                    <h5>Genero</h5>
                    <select name="genero" id="genero" style="width: 200px; height: 40px"
                        class="form-control border border-secondary" required>
                        <option value="comedia">Comedia</option>
                        <option value="drama">Drama</option>
                        <option value="terror">Terror</option>
                        <option value="romantica">Romantica</option>
                        <option value="suspenso">Suspenso</option>
                        <option value="otra">Otros</option>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Ingrese un genero valido</div>
                </div>
            </div>

            <div class="w-100 d-flex gap-5">
                <div class="w-25 d-flex flex-column">
                    <h5>Duracion</h5>
                    <div>
                        <input type="number" name="duracion" id="duracion" style="height: 40px"
                            class="form-control border border-secondary w-100" required max="999"><span>(minutos)</span>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Ingrese una duracion valida</div>
                    </div>
                </div>

                <div class="w-100 d-flex flex-column">
                    <h5>Restricciones de edad</h5>

                    <div class="d-flex flex-wrap gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="restriccion" id="restriccion1"
                                value="todos" required>
                            <label class="form-check-label" for="restriccion1">Todos los públicos</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="restriccion" id="restriccion2"
                                value="mayores a 7">
                            <label class="form-check-label" for="restriccion2">Mayores de 7 años</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="restriccion" id="restriccion3"
                                value="mayores de 18">
                            <label class="form-check-label" for="restriccion3">Mayores de 18 años</label>
                        </div>
                    </div>


                </div>
            </div>


            <div class="w-100">

                <h5>Sinopsis</h5>
                <textarea name="sinopsis" id="sinopsis" cols="1" class="w-100 border border-secondary"
                    style="height: 100px" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>

            <div class="d-flex justify-content-end w-100 gap-2 mb-4">

                <input type="submit" value="Enviar" class="btn btn-primary">
                <input type="reset" value="Borrar" class="btn btn-light">
            </div>
    </div>
    </div>



    </form>
    </div>





    <?php include_once '../estructura/footer.php' ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

    <script src="../js/js.js"></script>
    <script>// Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()</script>
</body>

</html>