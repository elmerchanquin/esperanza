<?php
class TablaPersona{
    public static function tablaPersonas () {
        require 'Conexion.php';
            $consulta = 'SELECT * FROM persona';
            $mysqli->set_charset("utf8");
            $resultado = $mysqli->query($consulta);
        while ($fila = $resultado->fetch_assoc()) {
            echo  '
                <tr>
                    <td>' . $fila['codigo'] . '</td>
                    <td>' . $fila['nombre'] . '</td>
                    <td>' . $fila['telefono'] . '</td>
                    <td>' . $fila['identificacion'] . '</td>
                    <td><button class="">Nuevo Historial</button></td>
                    <td><button class="">Ver todo</button></td>
                </tr>';
        }
    }
}
