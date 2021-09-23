<?php

class CoTutor {
    
    public function c(){

        require_once "model/M_tutor.php";
        $tutor = new Tutor();
        $data["titulo"]="Tutor";
        $data["tutor"]= $tutor->get_tutor();

        require_once "view/V_tutor.php";
    }
}

?>