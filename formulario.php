<?php include_once "encabezado.php"; ?>
<div class="row">
    <div class="col-12">
        <h1 class="text-center mt-4">Agregar</h1>
        <div class="custom-form-container"> 
            <form action="insertar.php" method="POST" class="custom-form mt-4 mx-auto p-4">
                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input required name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre de mascota">
                </div>
                <div class="form-group">
                    <label for="edad" class="form-label">Edad:</label>
                    <input type="number" class="form-control" id="edad" name="edad" required placeholder="Edad de mascota">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="./listar.php" class="btn btn-warning">Ver todos</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once "pie.php"; ?>

