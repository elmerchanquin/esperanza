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
            <form action="" method="POST">
                <input type="search" name="" placeholder="Buscar...">
                    <select name="" id="">
                        <option value="nombre">Nombre</option>
                        <option value="codigo">Código</option>
                        <option value="identificacion">DPI</option>
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
                                <td><form method="POST" action="http://127.0.0.1/esperanza/nuevo-historial/"><input type="hidden" name="codigo" value="' . $fila['codigo'] . '"><button type="submit">Nuevo Historial</button></a></form></td>
                                <td><button class="">Ver todo</button></td>
                            </tr>';
                    }
                }
            tablaPersonas();
            ?>
        </table>
    </div>
    </div>
</body>
</html>