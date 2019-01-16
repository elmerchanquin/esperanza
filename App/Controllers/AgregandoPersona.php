<?php
    require_once 'Conexion.php';

    class AgregandoPersona {
        public function agregarPersona () {
            $dpi = $_POST[dpi];
            $nombre = $_POST[nombre];
            $telefono = $_POST[teledono];
            $direccion = $_POST[direccion];
            $ciudad = $_POST[ciudad];
            $genero = $_POST[genero];
            $escolaridad = $_POST[escolaridad];
            $nacimiento = $_POST[nacimiento];
            $estadoCivil = $_POST[estadoCivil];
            $ocupacion = $_POST[ocupacion];

            $query = "INSERT INTO `persona`
            (`identificacion`, `nombre`, `telefono`, `direccion`, `ciudad`, `genero`, `escolaridad`, `nacimiento`, `estado-civil`, `ocupación`)
            VALUES ($dpi, $nombre, $telefono, $direccion, $ciudad, $genero, $escolaridad, $nacimiento, $estadoCivil , $ocupacion)";
            $resultado = mysqli_query($conexion, $query);
        }
    }
