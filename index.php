<?php
echo "Hola Mundo"; // Agrega el mensaje "Hola Mundo"
header("Location: formulario.php"); // Redirige a formulario.php
?>
<?php

$titulo = "Bienvenido a registro!!"; // Título predeterminado
$boton = "Registrar"; // Texto del botón predeterminado

if (isset($_GET['id'])) {
    // Si se proporciona un ID en la URL, significa que estás en la página de edición
    $titulo = "Actualizar Datos"; // Cambia el título para la página de edición
    $boton = "Actualizar"; // Cambia el texto del botón para la página de edición

}

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php include("header.html");

?>

<div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4"><?php echo $titulo; ?></h1>
    <p class="lead"> PHP</p>
</div>

<div class="container">
    <div class="card">
        <div class="card-body">
        <form autocomplete="off" action="conexion.php" method="post">
    <div class="row">
        <div class="col-sm-4 col-4">
            <div class="form-group">
                <label>Nro Documento</label>
                <input type="text" name="doc" maxlength="8" class="form-control" value="<?php echo isset($datos['doc']) ? $datos['doc'] : ''; ?>">
            </div>
        </div>
        <div class="col-sm-4 col-4">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nom" class="form-control" value="<?php echo isset($datos['nom']) ? $datos['nom'] : ''; ?>">
            </div>
        </div>
        <div class="col-sm-4 col-4">
            <div class="form-group">
                <label>Apellidos</label>
                <input type="text" name="ape" class="form-caontrol" value="<?php echo isset($datos['ape']) ? $datos['ape'] : ''; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-4">
            <div class="form-group">
                <label>Direccion</label>
                <input type="text" name="dir" class="form-control" value="<?php echo isset($datos['dir']) ? $datos['dir'] : ''; ?>">
            </div>
        </div>
        <div class="col-sm-4 col-4">
            <div class="form-group">
                <label>Celular</label>
                <input type="text" name="cel" class="form-control" value="<?php echo isset($datos['cel']) ? $datos['cel'] : ''; ?>">
            </div>
        </div>
    </div>
    <input type="submit" class="btn btn-primary float-right" value="<?php echo $boton; ?>">
</form>

        </div>
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="https://www.svgrepo.com/show/508391/uncle.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">&copy; 2023-1</small>
            </div>
        </div>
    </footer>
</div>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
