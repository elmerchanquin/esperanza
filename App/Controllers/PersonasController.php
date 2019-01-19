<?php

Class PersonasController {
    public function tPersonas(){
        include '../App/Models/Persona.php';
        include '../views/personas.php';
    }
}

PersonasController::tPersonas();