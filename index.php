<?php
require_once "modelos/conexion.php";
require_once "controller/routes.controller.php";
require_once "controller/sku.controller.php";
require_once "modelos/sku.model.php";
require_once "modelos/customer.model.php";
require_once "controller/customer.controller.php";
require_once "controller/users.controller.php";

$ruta= new ControllerRutes();
$ruta->inicio();


?>