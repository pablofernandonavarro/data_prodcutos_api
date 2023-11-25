<?php
class ControllerUsers
{

    public function  create($dataUser)
    {

        // valido Name  //

        if (isset($dataUser["name"]) && !preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $dataUser['name'])) {


            $status = 400;
            $json = array(
                "detalle" => "Error en el campo name solo se permites letras "
            );
            echo json_encode($json, true);
            return;
        }

        //valido email //


        if (isset($dataUser["email"]) && !preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}+$/', $dataUser['email'])) {

            $status = 400;
            $json = array(
                "detalle" => "tiene que ser un email "
            );
            echo json_encode($json, true);
            return;
        }
    }
}
