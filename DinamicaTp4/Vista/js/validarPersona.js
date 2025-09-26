const form = document.querySelector("form");

form.addEventListener("submit", (event) => {
  // Cancela el envío si los datos no son válidos
  if (!form.checkValidity()) {
    event.preventDefault();
    event.stopPropagation();
  }

  // Validar DNI
  const dniInput = form.querySelector(".dni");
  if (dniInput) {
    if (!/^\d{7,9}$/.test(dniInput.value)) {
      event.preventDefault();
      event.stopPropagation();
      dniInput.classList.add("is-invalid");
      dniInput.classList.remove("is-valid");
      dniInput.nextElementSibling.textContent =
        "Ingrese un DNI válido (entre 7 y 9 números)";
    } else {
      dniInput.classList.remove("is-invalid");
      dniInput.classList.add("is-valid");
    }
  }


  // Validar Teléfono (solo números, + opcional al inicio, entre 7 y 15 dígitos)
  const telInput = form.querySelector("#telefono");
  if (telInput) {
    if (!/^\+?\d{7,15}$/.test(telInput.value)) {
      event.preventDefault();
      event.stopPropagation();
      telInput.classList.add("is-invalid");
      telInput.classList.remove("is-valid");
      telInput.nextElementSibling.textContent =
        "Ingrese un teléfono válido: solo números, un '+' opcional al inicio, entre 7 y 15 dígitos";
    } else {
      telInput.classList.remove("is-invalid");
      telInput.classList.add("is-valid");
    }
  }


  // Validar Fecha de Nacimiento (no futura)
  const fechaInput = form.querySelector("#fechaNac");
  if (fechaInput) {
    const hoy = new Date();
    hoy.setHours(0, 0, 0, 0);
    const fechaIngresada = new Date(fechaInput.value);

    if (fechaIngresada > hoy) {
      event.preventDefault();
      event.stopPropagation();
      fechaInput.classList.add("is-invalid");
      fechaInput.classList.remove("is-valid");
      fechaInput.nextElementSibling.textContent =
        "La fecha de nacimiento no puede ser mayor que hoy";
    } else {
      fechaInput.classList.remove("is-invalid");
      fechaInput.classList.add("is-valid");
    }
  }

  // Validar Nombre (máximo 20 caracteres y sin números)
  const nombreInput = form.querySelector("#nombre");
  if (nombreInput) {
    if (nombreInput.value.length > 20) {
      event.preventDefault();
      event.stopPropagation();
      nombreInput.classList.add("is-invalid");
      nombreInput.classList.remove("is-valid");
      nombreInput.nextElementSibling.textContent =
        "El nombre no puede tener más de 20 caracteres";
    } else if (!/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/.test(nombreInput.value)) {
      event.preventDefault();
      event.stopPropagation();
      nombreInput.classList.add("is-invalid");
      nombreInput.classList.remove("is-valid");
      nombreInput.nextElementSibling.textContent =
        "El nombre solo puede contener letras y espacios";
    } else {
      nombreInput.classList.remove("is-invalid");
      nombreInput.classList.add("is-valid");
    }
  }

  // Validar Apellido (máximo 30 caracteres y sin números)
  const apellidoInput = form.querySelector("#apellido");
  if (apellidoInput) {
    if (apellidoInput.value.length > 30) {
      event.preventDefault();
      event.stopPropagation();
      apellidoInput.classList.add("is-invalid");
      apellidoInput.classList.remove("is-valid");
      apellidoInput.nextElementSibling.textContent =
        "El apellido no puede tener más de 30 caracteres";
    } else if (!/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/.test(apellidoInput.value)) {
      event.preventDefault();
      event.stopPropagation();
      apellidoInput.classList.add("is-invalid");
      apellidoInput.classList.remove("is-valid");
      apellidoInput.nextElementSibling.textContent =
        "El apellido solo puede contener letras y espacios";
    } else {
      apellidoInput.classList.remove("is-invalid");
      apellidoInput.classList.add("is-valid");
    }
  }

  form.classList.add("was-validated");
});
