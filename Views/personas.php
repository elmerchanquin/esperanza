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
            TablaPersona::tablaPersonas();
            ?>
        </table>
    </div>
    </div>
</body>
</html>