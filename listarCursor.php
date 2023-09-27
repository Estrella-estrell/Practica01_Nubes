<?php

?>
<?php

include_once "base_de_datos.php";
$consulta = "select id, nombre, edad from mascotas";
# Preparar sentencia e indicar que vamos a usar un cursor
$sentencia = $base_de_datos->prepare($consulta, [
    PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
]);
$sentencia->execute();
?>

<?php include_once "encabezado.php" ?>
<div class="row justify-content-center"> 
    <div class="col-12">
        <h1 class="text-center">Listar con cursor</h1>
        <a href="https://tecsup.instructure.com/courses/25788" target="_blank">Por Yenifer Vargas</a>
        <br>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($mascota = $sentencia->fetchObject()) { ?>
                    <tr>
                        <td><?php echo $mascota->id ?></td>
                        <td><?php echo $mascota->nombre ?></td>
                        <td><?php echo $mascota->edad ?></td>
                        <td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $mascota->id ?>">Editar 📝</a></td>
                        <td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $mascota->id ?>">Eliminar 🗑️</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>
