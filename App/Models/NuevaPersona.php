<?php
class NuevaPersona{
    public static function AgregarPersona(){
        require 'Conexion.php';
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $pais = $_POST['pais'];
        $departamento = $_POST['departamento'];
        $ciudad = $_POST['ciudad'];
        $direccion = $_POST['direccion'];
        $genero = $_POST['genero'];
        $estado = $_POST['estadoCivil'];
        $escolaridad = $_POST['escolaridad'];
        $nacimiento = $_POST['nacimiento'];

        if (isset($_POST[pais2])) {
            $pais2 = $_POST['pais2'];
            $departamento2 = $_POST['departamento2'];
            $ciudad = $_POST['ciudad2'];
            $direccion2 = $_POST['direccion2'];
        }

        $sql = "INSERT INTO persona (nombre, telefono, ciudad,
        direccion, direccion2, genero, estadoCivil, escolaridad, nacimiento)
        VALUES ($nombre, $telefono, $ciudad, $direccion, $direccion2, $genero,
        $estado, $escolaridad, $nacimiento, $pais2, )";

        $mysqli->set_charset("utf8");
        $mysqli->query($sql);
    }
}