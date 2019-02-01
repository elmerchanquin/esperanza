<?php

Class PersonasController {
    public function tPersonas(){
        include '../App/Models/TablaPersona.php';
        include '../views/personas.php';
    }
}

PersonasController::tPersonas();