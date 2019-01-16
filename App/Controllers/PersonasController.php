<?php
namespace App\Controllers;

use App\Models\PersonasController;

class PersonaController {
    public function indexAction() {
    echo "funciona";
    include '../views/personas.php';
    }
}