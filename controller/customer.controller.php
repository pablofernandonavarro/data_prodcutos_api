<?php
class ControllerCustomer{
       
    public function show($id){  


        $customer_id = ModelCustomer::find($id);
        $json = array(
            "detalle" => $customer_id,
        );
        echo json_encode($json, true);
        return;


    }
    public function all_customers(){  

        $customers= ModelCustomer::index("clientes");

        $json = array(
            "detalle" => $customers,
        );
        echo json_encode($json, true);
        return;


    }


}
?>