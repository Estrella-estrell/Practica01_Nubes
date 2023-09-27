<?php
include_once "base_de_datos.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verificar si se recibieron los datos del formulario
    if (isset($_POST["id"], $_POST["nombre"], $_POST["edad"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        
        // Validar que los datos sean válidos (puedes agregar más validaciones según tus necesidades)
        if (!empty($nombre) && is_numeric($edad)) {
            // Conectar a la base de datos
            try {
                // Actualizar los datos de la mascota en la base de datos
                $sentencia = $base_de_datos->prepare("UPDATE mascotas SET nombre = ?, edad = ? WHERE id = ?");
                $sentencia->execute([$nombre, $edad, $id]);
                
                // Redireccionar a la página de listar después de la actualización
                header("Location: listar.php");
                exit();
            } catch (Exception $e) {
                // Manejar errores de la base de datos
                echo "Error al actualizar los datos: " . $e->getMessage();
            }
        } else {
            echo "Los datos ingresados no son válidos.";
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>
