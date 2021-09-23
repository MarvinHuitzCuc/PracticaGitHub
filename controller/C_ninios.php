<?php

class CoNinio {
    
    public function c(){

        require_once "model/M_ninios.php";
        $ninios = new Ninios();
        $data["titulo"]="Niños";
        $data["ninios"]= $ninios->get_ninios();

        require_once "view/V_ninios.php";
    }
}

?>