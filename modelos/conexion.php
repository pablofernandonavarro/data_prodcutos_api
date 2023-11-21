<?php
class Conexion
{
    static public function conect()
    {

        $dsn = 'datos_testing_icg';
        $usuario = "root";
        $pass = "";

        try {
            $link = new PDO("mysql:host=localhost;dbname=$dsn",$usuario,$pass);
            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
            exit;
        }
    }
}
