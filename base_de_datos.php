<?php
$database_url = 'postgresql://postgres:HA23SIzJFNGvxBH68oRN@containers-us-west-108.railway.app:6753/railway';

try {
    $db_params = parse_url($database_url);
    
    $db_host = $db_params['host'];
    $db_port = $db_params['port'];
    $db_name = ltrim($db_params['path'], '/');
    $db_user = $db_params['user'];
    $db_password = $db_params['pass'];

    $base_de_datos = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_password);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
