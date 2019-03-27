<?php
$myurl=$_SERVER['REQUEST_URI'];
$server = $_SERVER['HTTP_HOST'];

if ($myurl == '/esperanza/') {
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
} elseif ($myurl == '/esperanza/registrado/') {
    include '../Views/registrado.php';
} elseif ($myurl == '/esperanza/login/') {
    include '../Views/login.php';
} elseif ($myurl == '/esperanza/cerrar-sesion/') {
    include '../Views/cerrarSesion.php';
} elseif ($myurl == '/esperanza/cerrar-sesion/') {
    include '../Views/cerrarSesion.php';
} else {
    include '../Views/error404.php';
}

?>