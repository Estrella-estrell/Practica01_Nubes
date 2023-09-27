<?php
$contraseña = "HA23SIzJFNGvxBH68oRN";
$usuario = "postgres";
$nombreBaseDeDatos = "Mesas";

$rutaServidor = "containers-us-west-108.railway.app"; // Solo el nombre del host
$puerto = "6753";

try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}


?>
