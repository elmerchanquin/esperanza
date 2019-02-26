<?php
$myurl=$_SERVER['REQUEST_URI'];

if (preg_match("/nuevo-historia/", $myurl)) {
        include '../Views/nuevoHistorial.php';
} elseif ($myurl == '/esperanza/') {
    include '../Views/personas.php';
} elseif ($myurl == '/esperanza/nueva-persona/') {
    include '../Views/nuevaPersona.php';
} elseif ($myurl == '/esperanza/historial/') {
    include '../Views/personas.php';
} elseif ($myurl == '/esperanza/nuevo-historial/') {
    include '../Views/nuevoHistorial.php';
} elseif ($myurl == '/esperanza/ver-todo/') {
    include '../Views/verTodo.php';
} elseif ($myurl == '/esperanza/consulta/') {
    include '../Views/consulta.php';
} elseif ($myurl == '/esperanza/examen-fisico/') {
    include '../Views/examenFisico.php';
} else {
    echo 'Error 404 no se ha encontrado nada en esta ruta. ';
    echo '<a href="http://127.0.0.1/esperanza/">Regresar</a>';
}

?>