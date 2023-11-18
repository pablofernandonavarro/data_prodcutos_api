<?php

$arrayroutes = explode("/", $_SERVER['REQUEST_URI']);

echo "<pre>";
print_r($arrayroutes);
echo "<pre>";


if (count(array_filter($arrayroutes)) == 1) {

    $json = array(
        "detalle" => "no encontrado"
    );

    echo json_encode($json, true);
    return;
} else {
    if (array_filter($arrayroutes)[2] == "all_sku") {



        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {


            $allsku = new ControllerSku();
            $allsku->all_sku();
        }
    }

    if (array_filter($arrayroutes)[2] == "sku") {

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {



            if (isset($_SERVER['REQUEST_METHOD']) && isset(array_filter($arrayroutes)[3])) {

                $sku = new ControllerSku();
                $sku->show(array_filter($arrayroutes)[3]);
            }
        }
    }

    if (array_filter($arrayroutes)[2] == "all_customers") {

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {

            $clientes = new ControllerCustomer();
            $clientes->all_customers();
        }
    }
    if (array_filter($arrayroutes)[2] == "customer") {

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {

            $clientes = new ControllerCustomer();
            $clientes->Customer();
        }
    }
}
