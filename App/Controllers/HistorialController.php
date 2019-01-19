<?php

Class HistorialController {
        public static function Historial(){
            include '../App/Models/NuevoHistorial.php';
            include '../views/nuevo-historial.php';
        }
    }
    HistorialController::Historial();
