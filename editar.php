<?php
include_once "base_de_datos.php";

if (!isset($_GET["id"])) {
    exit("ID no proporcionado");
}

$id = $_GET["id"];
$sentencia = $base_de_datos->prepare("SELECT id, nombre, edad FROM mascotas WHERE id = ?;");
$sentencia->execute([$id]);
$mascota = $sentencia->fetchObject();

if (!$mascota) {
    exit("Mascota no encontrada");
}
?>

<?php include_once "encabezado.php"; ?>
<div class="row justify-content-center align-items-center">
    <div class="col-12 col-md-6">
        <h1 class="text-center">Editar</h1>
        <form action="guardarDatosEditados.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $mascota->id; ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $mascota->nombre; ?>" required name="nombre" type="text" id="nombre" placeholder="Nombre de mascota" class="form-control">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input value="<?php echo $mascota->edad; ?>" required name="edad" type="number" id="edad" placeholder="Edad de mascota" class="form-control">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="./listar.php" class="btn btn-warning">Volver</a>
            </div>
        </form>
    </div>
</div>

<?php include_once "pie.php"; ?>
