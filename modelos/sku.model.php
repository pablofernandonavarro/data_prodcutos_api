<?php
require_once "modelos/conexion.php";

class ModelSku
{
    static public function index($tabla)
    {


        $stmt = Conexion::conect()->prepare("SELECT * FROM $tabla");
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_CLASS);
        $stmt->close();
        $stmt = null;
      
    }
     static public function find($id)
     {


         $stmt = Conexion::conect()->prepare("SELECT * FROM productos where id_producto = $id");
         $stmt->execute();
         return $stmt->fetchAll(PDO::FETCH_CLASS);
         $stmt->close();
         $stmt = null;
     }
}
