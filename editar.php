<?php include_once "encabezado.php"; ?>
<div class="row justify-content-center align-items-center"> <!-- Centrar el contenido horizontal y verticalmente -->
    <div class="col-12 col-md-6">
        <h1 class="text-center">Editar</h1>
        <form action="guardarDatosEditados.php" method="POST" class="custom-form mt-4 mx-auto p-4">
            <input type="hidden" name="id" value="<?php echo $mascota->id; ?>">
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre:</label>
                <input value="<?php echo $mascota->nombre; ?>" required name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre de mascota">
            </div>
            <div class="form-group">
                <label for="edad" class="form-label">Edad:</label>
                <input value="<?php echo $mascota->edad; ?>" required name="edad" type="number" class="form-control" id="edad" placeholder="Edad de mascota">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="./listar.php" class="btn btn-warning">Volver</a>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>
