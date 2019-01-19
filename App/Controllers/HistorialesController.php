<?php

Class HistorialController {
        public static function mHistorial(){
            include '../App/Models/Historial.php';
            include '../views/historiales.php';
        }
    }
    HistorialController::mHistorial();
