<?php

//Definimos el acceso a la Base de Datos (POO)

class conectar {

    public static function conexion(){
        //$conexion = new mysqli("localhost","root","myadminm","controlpt");

        //Otra forma para manejar errores de conexion:
        $conexion = new mysqli_connect("localhost","root","myadminm","controlpt");
        if (!$conexion) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        mysqli_close($conexion);


        //return $conexion;
    }

}

?>