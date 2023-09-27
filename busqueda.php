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

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Búsqueda de mascotas">
    <meta name="author" content="Tu Nombre">
    <title>Búsqueda de Mascotas</title>
    <!-- Agrega tus estilos CSS aquí -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 5px;
            width: 200px;
        }

        button[type="submit"] {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Búsqueda de Mascotas</h1>
    <form action="busqueda.php" method="GET">
        <input type="text" name="q" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>
    
    <?php if (count($resultados) > 0): ?>
        <table>
            <thead>
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
    <?php else: ?>
        <p>No se encontraron resultados.</p>
    <?php endif; ?>
</body>

</html>
