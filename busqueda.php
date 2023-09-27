<?php
include_once "base_de_datos.php";

if (isset($_GET['q'])) {
    $busqueda = '%' . $_GET['q'] . '%';

    $consulta = "SELECT id, nombre, edad FROM mascotas WHERE nombre LIKE :busqueda";
    
    $sentencia = $base_de_datos->prepare($consulta);
    $sentencia->bindParam(':busqueda', $busqueda, PDO::PARAM_STR);
    $sentencia->execute();
    
    $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
} else {
    $resultados = [];
}
?>

<?php include_once "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Búsqueda de Mascotas</h1>
        <form action="busqueda.php" method="GET">
            <input type="text" name="q" placeholder="Buscar...">
            <button type="submit">Buscar</button>
        </form>
        
        <?php if (count($resultados) > 0): ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultados as $mascota): ?>
                            <tr>
                                <td><?php echo $mascota->id; ?></td>
                                <td><?php echo $mascota->nombre; ?></td>
                                <td><?php echo $mascota->edad; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p>No se encontraron resultados.</p>
        <?php endif; ?>
    </div>
</div>
<?php include_once "pie.php" ?>
