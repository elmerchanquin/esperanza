<!DOCTYPE html>
<html lang>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica Esperanza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilos.css"/>
</head>
<body>
    <?php
        include 'parts/header.php';
    ?>
    <div class="cabecera">
        <div class="titulo">
            <h1>
                Personas
            </h1>
        </div>
        <div class="busqueda">
            <form action="http://127.0.0.1/esperanza/" method="POST">
                <input type="search" name="busqueda" placeholder="Buscar..." value="<?php if(isset($_POST['busqueda'])) { print($_POST['busqueda']);}?>" required>
                    <select name="metodo" id="">
                        <?php if($_POST['metodo'] == 'codigo') {
                                print($_POST['<option value="codigo">Código</option>
                                <option value="nombre">Nombre</option>']);
                            } else {
                                print($_POST['<option value="nombre">Nombre</option>
                                <option value="codigo">Código</option>']);
                            }
                            ?>
                    </select>
                <input type="submit" value="Buscar">
            </form>
         </div>
    </div>
    <div class="contenedor">
    <div class="tabla">
        <table>
            <tr>
                <th class="">
                    Código
                </th>
                <th class="">
                    Nombre
                </th>
                <th class="">
                    Teléfono
                </th>
                <th class="">
                    Identificación
                </th>
                <th class="">
                    Nuevo historial
                </th>
                <th class="">
                    Ver todo
                </th>
            </tr>
            <?php
            function tablaPersonas () {
                    require 'Conexion.php';
                        $consulta = 'SELECT * FROM persona';
                        $mysqli->set_charset("utf8");
                        $resultado = $mysqli->query($consulta);
                    while ($fila = $resultado->fetch_assoc()) {
                        echo  '
                            <tr>
                                <td>' . $fila['codigo'] . '</td>
                                <td>' . $fila['nombre'] . '</td>
                                <td>' . $fila['telefono'] . '</td>
                                <td>' . $fila['identificacion'] . '</td>
                                <td><form method="POST" action="http://127.0.0.1/esperanza/consulta/"><input type="hidden" name="codigo" value="' . $fila['codigo'] . '"><button type="submit">Consulta</button></a></form></td>
                                <td><form method="POST" action="http://127.0.0.1/esperanza/ver-todo/"><input type="hidden" name="codigo" value="' . $fila['codigo'] . '"><button type="submit">Ver todo</button></a></form></td>
                            </tr>';
                    }
                }

            function buscarPersonas () {
                require 'Conexion.php';
                $consulta = $_POST['busqueda'];
                $metodo = $_POST['metodo'];
                require 'Conexion.php';
                        if ($metodo == 'nombre') {
                            $consulta = 'SELECT * FROM persona WHERE nombre REGEXP "'.$consulta.'"';
                        } else {
                            $consulta = 'SELECT * FROM persona WHERE codigo REGEXP "'.$consulta.'"';
                        }
                        $mysqli->set_charset("utf8");
                        $resultado = $mysqli->query($consulta);
                    while ($fila = $resultado->fetch_assoc()) {
                        echo  '
                            <tr>
                                <td>' . $fila['codigo'] . '</td>
                                <td>' . $fila['nombre'] . '</td>
                                <td>' . $fila['telefono'] . '</td>
                                <td>' . $fila['identificacion'] . '</td>
                                <td><form method="POST" action="http://127.0.0.1/esperanza/consulta/"><input type="hidden" name="codigo" value="' . $fila['codigo'] . '"><button type="submit">Consulta</button></a></form></td>
                                <td><form method="POST" action="http://127.0.0.1/esperanza/ver-todo/"><input type="hidden" name="codigo" value="' . $fila['codigo'] . '"><button type="submit">Ver todo</button></a></form></td>
                            </tr>';
                }
            }
            if (isset($_POST['busqueda'])) {
                buscarPersonas();
            } else {
                tablaPersonas();
            }
            ?>
        </table>
    </div>
    </div>
</body>
</html>