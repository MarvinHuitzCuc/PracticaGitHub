<?php
 //se inicia la clase ninios con todos sus atributos
 class Tutor {

    private $db;
    private $tutor;

    public function __construct(){
        $this->db = conectar::conexion();
        $this->tutor = array();
    }

    public function get_tutor(){
        $sql = "select * from tutor";
        $resultado = $this->db->query($sql);
        while ($r =$resultado->fetch_assoc())
        {
            $this->tutor[] = $r;
        }
        return $this->tutor;
    }
 }



?>