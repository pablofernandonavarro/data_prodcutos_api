
<?php
$dsn = 'odbc:MSSQLTESTING';
$usuario = 'sa';
$pass = 'masterkey';

try {
    $conexion = new PDO($dsn, $usuario, $pass);
    

} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
    exit;
}

