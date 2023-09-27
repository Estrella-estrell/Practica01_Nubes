

<?php include_once "encabezado.php"?>
   <div class="row">
   <div class="col-12">
        <h1>Agregar</h1>
        <form action="insertar.php" method="POST">
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre:</label>
                <input required name"nombre" type="text" class="form-control" id="nombre" placeholder="Nombre de mascota">
            </div>
            <div class="form-group">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" required placeholder="Edad de mascota">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="./listar.php" class="btn btn-warning">Ver todos</a>
        </form>
    </div>
   </div>

<?php include_once "pie.php"?>

</body>
</html>
