<?php

$arrayroutes = explode("/", $_SERVER['REQUEST_URI']);

// echo "<pre>";
// print_r($arrayroutes);
// echo "<pre>";


if (count(array_filter($arrayroutes)) == 1) {

    $json = array(
        "detalle" => "no encontrado"
    );
    echo json_encode($json, true);
    return;
} else {




    if (array_filter($arrayroutes)[2] == "user") {


        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

            $dataUser = array(
                "email" => $_POST['email'],
                "password" => $_POST['password'],
                "name" => $_POST['name'],
            );

     



             $user = new ControllerUsers();
             $user->create($dataUser);
        }
    }









    if (array_filter($arrayroutes)[2] == "all_sku") {


        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
            $allsku = new ControllerSku();
            $allsku->all_sku();
        }
    }




    if (array_filter($arrayroutes)[2] == "sku") {

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {



            if (isset($_SERVER['REQUEST_METHOD']) && isset(array_filter($arrayroutes)[2])) {

                $sku = new ControllerSku();
                $sku->show(array_filter($arrayroutes)[3]);
            }
        }
    }


    if (array_filter($arrayroutes)[2] == "customer") {

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {

            $clientes = new ControllerCustomer();
            $clientes->show(array_filter($arrayroutes)[3]);
        }
    }


    if (array_filter($arrayroutes)[2] == "all_customers") {

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET') {

            $clientes = new ControllerCustomer();
            $clientes->all_customers();
        }
    }
}
