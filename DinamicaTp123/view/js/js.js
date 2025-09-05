$.validator.addMethod("textOnly", function(value, element) {
  return this.optional(element) || /^[A-Za-z]+$/.test(value);
}, "Solo se permiten letras");
$(function () {
  $("#formularioPrueba").validate({
    rules: {
      nombre: {
        required: true,
        minlength: 5,
        textOnly: true,
      },
      apellido: {
        required: true,
        minlength: 5,
        textOnly: true,
      },
      edad: {
        required: true,
        range: [1, 120],
        number: true,
      },
      direccion: {
        required: true,
        minlength: 5,
      },
    },

    messages: {
      nombre: {
        required: "Por favor ingresa tu nombre",
        minlength: "Debe tener 5 caractees como minimo",
      },
      apellido: {
        required: "Por favor ingresa tu apellido",
        minlength: "Debe tener 5 caractees como minimo",
      },
      edad: {
        required: "Por favor ingresa tu edad",
        range: "Debe de tener una edad realista",
      },
      direccion: {
        required: "Ingrese su direccion",
        minlength: "La direccion debe tener 5 caracteres",
      },
    },
    errorClass: "campo-error",
    validClass: "campo-valido",
  });
});



function verificacion3() {
  let $usuario;
  let $contrasenia;
  let $errores;
  let $resp = false;
  $usuario = document.getElementById("usuario");
  $contrasenia = document.getElementById("contrasenia");
  $errores = [];

  if ($usuario.value == $contrasenia.value) {
    $errores.push("La contraseña no puede ser igual que el usuario xd. ");
  }
  if ($contrasenia.value.length < 8) {
    $errores.push("La contraseña debe tener minimo 8 digitos. ");
  }
  if (!/[a-zA-Z]/.test($contrasenia.value) || !/\d/.test($contrasenia.value)) {
    $errores.push("La contraseña debe contener letras y numeros. ");
  }

  if ($errores.length <= 0) {
    $resp = true;
  } else if ($usuario.value != "" && $contrasenia.value != "") {
    alert($errores.join());
  }

  return $resp;
}
