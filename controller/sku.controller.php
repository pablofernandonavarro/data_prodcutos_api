<?php
class ControllerSku{

    public function all_sku(){
        $json = array(
            "detalle" => 'estas en la vista todos los sku de icg'
        );
        echo json_encode($json, true);
        return;
    }

    public function index(){
        $json = array(
            "detalle" => 'estas en la vista de un sku de icg'
        );
        echo json_encode($json, true);
        return;
    }
}


?>