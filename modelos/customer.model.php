<?php
class ModelCustomer
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


         $stmt = Conexion::conect()->prepare("SELECT * FROM clientes where id_cliente = $id");
         $stmt->execute();
         return $stmt->fetchAll(PDO::FETCH_CLASS);
         $stmt->close();
         $stmt = null;
     }
}