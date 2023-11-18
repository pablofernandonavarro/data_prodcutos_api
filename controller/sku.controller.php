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

        $sku = ModelSku::index('ARTICULOS');
        $json = array(
            "detalle" => $sku
        );
        echo json_encode($json, true);
        return;
    }
    public function show($id){
        $json = array(
            "detalle" => 'el id es : '. $id
        );
        echo json_encode($json, true);
        return;
    }
}


?>