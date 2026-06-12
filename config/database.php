<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$bd = "bdtienda";
$port = 3306;

try {
    $conn = new mysqli($host, $user, $password, $bd, $port);
    echo "Conexión exitosa";
} catch (mysqli_sql_exception $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>