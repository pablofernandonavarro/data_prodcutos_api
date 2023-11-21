<?php
class ControllerSku{


    // if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
        public function show($id)
        {
            
            $sku_id = ModelSku::find($id);
            $json = array(
                "detalle" => $sku_id,
            );
            echo json_encode($json, true);
            return;
        }
        public function all_sku()
        {
            $sku = ModelSku::index('productos');
            $json = array(
                "detalle" => $sku,
            );
            echo json_encode($json, true);
            return;
        }
        
     }
    // }

?>
