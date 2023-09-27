<?php

?>
<?php

if (!isset($_POST["nombre"]) || !isset($_POST["edad"])) {
    exit();
}



include_once "base_de_datos.php"; 
$edad = $_POST["edad"];


if (isset($base_de_datos)) { 
    $sentencia = $base_de_datos->prepare("INSERT INTO mascotas(nombre, edad) VALUES (?, ?);");
    $resultado = $sentencia->execute([$nombre, $edad]); 

    if ($resultado === true) {
        header("Location: listar.php");
    } else {
        echo "Algo salió mal. Por favor verifica que la tabla exista";
    }
} else {
    echo "Error: La conexión a la base de datos no está definida en 'base_de_datos.php'";
}
?>
