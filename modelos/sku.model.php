<?php
require_once "conexion.php";

class ModelSku{ 
    static public function index($tabla){
        $stmt = $conexion->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
        $stmt->close();
        $stmt-null;
     }
}

?>