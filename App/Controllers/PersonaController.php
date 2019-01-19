<?php

Class PersonaController {
    public static function mPersona(){
        include '../App/Models/NuevaPersona.php';
        include '../views/nuevaPersona.php';
    }
}

PersonaController::mPersona();
