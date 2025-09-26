<?php
include_once '../estructura/header.php';
?>

<div class="container mt-4">
    <h2>Buscar autos de una Persona</h2>
    <form id="formAutosPersona" method="get" action="autosPersonaAction.php" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI de la persona</label>
            <input type="number" id="dni" name="dni" class="form-control dni" 
                   placeholder="Ingrese DNI" required min="1000000" max="999999999">
            <div class="invalid-feedback">
                Ingrese un DNI válido.
            </div>
            
        </div>
        <button type="submit" class="btn btn-primary">Ver Autos</button>
        <a href="listaPersonas.php" class="btn btn-secondary">Ver lista de personas</a>
    </form>
</div>

<script src="../js/validarPersona.js"></script>

<?php include_once '../estructura/footer.php'; ?>
