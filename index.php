<?php
require_once "modelos/conexion.php";
require_once "controller/routes.controlador.php";
require_once "controller/sku.controller.php";
require_once "modelos/sku.model.php";
require_once "modelos/customer.model.php";
require_once "controller/customer.controller.php";

$ruta= new ControladorRutas();
$ruta->inicio();


?>