<?php
$contraseña = "HA23SIzJFNGvxBH68oRN";
$usuario = "postgres";
$nombreBaseDeDatos = "Mesas";

$rutaServidor = "postgresql://postgres:HA23SIzJFNGvxBH68oRN@containers-us-west-108.railway.app:6753/railway";
$puerto = "6753";
try{
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo("Error de conexión a la base de datos: " . $e->getMessage());
}


?>
