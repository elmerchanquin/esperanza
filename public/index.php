<?php
$myurl=$_SERVER['REQUEST_URI'];

if ($myurl == '/esperanza/') {
    include '../App/Controllers/PersonasController.php';
} elseif ($myurl == '/esperanza/nueva-persona/') {
    include '../App/Controllers/PersonaController.php';
} elseif ($myurl == '/esperanza/historial/') {
    include '../App/Controllers/HistorialCreadoController.php';
} elseif ($myurl == '/esperanza/nuevo-historial/') {
    include '../App/Controllers/HistorialController.php';
} else {
    echo 'Error 404 no se ha encontrado nada en esta ruta. ';
    echo '<a href="http://localhost/esperanza/">Regresar</a>';
}
?>