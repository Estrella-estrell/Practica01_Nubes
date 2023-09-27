<?php
$contraseña = "HA23SIzJFNGvxBH68oRN";
$usuario = "postgres";
$nombreBaseDeDatos = "railway"; // Nombre de la base de datos

// Separar la URL del servidor en sus componentes
$urlServidor = "containers-us-west-108.railway.app";
$puerto = "6753";

try {
    $base_de_datos = new PDO("pgsql:host=$urlServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}



?>
