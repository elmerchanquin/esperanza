<?php
class Historial{
    public static function tablaHistoriales () {
        require 'Conexion.php';
            $consulta = 'SELECT * FROM historial';
            $mysqli->set_charset("utf8");
            $resultado = $mysqli->query($consulta);
        while ($fila = $resultado->fetch_assoc()) {
            echo  '
                <tr>
                    <td>' . $fila['codigo'] . '</td>
                    <td>' . $fila['id-persona'] . '</td>
                    <td>' . $fila['fecha'] . '</td>
                    <td><button class="">Nuevo Historial</button></td>
                    <td><button class="">Ver todo</button></td>
                </tr>';
        }
    }
}