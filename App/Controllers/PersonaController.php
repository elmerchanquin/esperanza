<?php

Class PersonaController {
    public static function mPersona(){
        include '../App/Models/AgregarPersona.php';
        include '../views/nuevaPersona.php';
    }
}

PersonaController::mPersona();
