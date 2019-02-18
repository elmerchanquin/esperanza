<?php
class Historial {
    public $id;
    public $persona;
    public $motivo;
    public $historia;
    public $fecha;
    public $comentarios;

    public static function agregarHistorial ($id, $persona, $motivo, $historia, $fecha, $comentarios) {
        $consulta_historial = "INSERT into historial (id, id-persona, fecha, motivo, historia)
        values ($id, $persona, $motivo, $historia, $fecha)";
        $consulta_comentarios = "INSERT into comentario (id, id-persona, fecha, motivo, historia)
        values ($id, $persona, $motivo, $historia, $fecha)";
    }
    public static function mostrarHistorial () {

    }
}
?>