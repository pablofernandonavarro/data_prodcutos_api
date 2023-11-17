<?php
class ControllerCustomer{
       
    public function customer(){  

        $json = array(
            "detalle" => 'estas en la vista de un cliente de icg'
        );
        echo json_encode($json, true);
        return;


    }
    public function all_customers(){  

        $json = array(
            "detalle" => 'estas en la vista de todos los clientes de icg'
        );
        echo json_encode($json, true);
        return;


    }


}
?>