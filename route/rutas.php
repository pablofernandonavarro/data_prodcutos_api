<?php

$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);

echo "<pre>";
print_r($arrayRutas);
echo "<pre>";


if (count(array_filter($arrayRutas)) == 1) {
    $json = array(
        "detalle" => "no encontrado"
    );

    echo json_encode($json, true);
    return;
} else {
    if (array_filter($arrayRutas)[2] == "all_sku") {



        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {


            $allsku = new ControllerSku();
            $allsku->index();
        }
    }



    if (array_filter($arrayRutas)[2] == "sku") {

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
          
           $sku= new ControllerSku();
           $sku->index();

        }
      
    }
    if (array_filter($arrayRutas)[2] == "all_customers") {

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
          
           $clientes= new ControllerCustomer();
           $clientes->all_customers();

        }
      
    }
    if (array_filter($arrayRutas)[2] == "customer") {

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
          
           $clientes= new ControllerCustomer();
           $clientes->Customer();

        }
      
    }



}
