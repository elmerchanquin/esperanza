<?php

Class HistorialController {
        public static function Historial(){
            include '../App/Models/AgregarHistorial.php';
            include '../views/nuevoHistorial.php';
        }
    }
    HistorialController::Historial();
