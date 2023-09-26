<?php
$database_url = getenv('postgresql://postgres:vC74w0XWPI3BZReiNHIH@containers-us-west-55.railway.app:6768/railway');
if ($database_url === false) {
    die("Las variables de entorno no están configuradas correctamente.");
}

try {
    $db_params = parse_url($database_url);
    
    $db_host = $db_params['containers-us-west-55.railway.app'];
    $db_port = $db_params['6768'];
    $db_name = ltrim($db_params['railway'], '/');
    $db_user = $db_params['postgres'];
    $db_password = $db_params['vC74w0XWPI3BZReiNHIH'];

    $pdo = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
