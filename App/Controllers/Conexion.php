<?php

class Conexion {
    public function conexion() {
        $usuario = "root";
        $contrasena = "";
        $servidor = "localhost";
        $basededatos = "esperanza";

        $conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos)
        or die ('Fallo la conexion a la base de datos');
        mysqli_query($conexion, "SET NAMES 'utf8'");
    }
}