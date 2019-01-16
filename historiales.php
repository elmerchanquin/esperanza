<!DOCTYPE html>
<html lang>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica Esperanza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilos.css" />
</head>
<body>
    <header>
        <div class="logo">
                <h1>Clínica Esperanza</h1>
        </div>
        <nav>
            <ul>
                <li><a href="http://localhost/esperanza/personas.php">Personas</a></li>
                <li><a href="http://localhost/esperanza/historiales.php">Historiales</a></li>
                <li><a href="http://localhost/esperanza/nueva-persona.php">Nueva Persona</a></li>
                 <li><a href="http://localhost/esperanza/nuevo-historial.php">Nuevo Historial</a></li>
            </ul>
        </nav>
    </header>
    <div class="contenedor-col-50">
        <div class="titulo">
            <h1>
                Historiales
            </h1>
        </div>
        <div class="formulario-busqueda">
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
    <div class="contenedor-completo">
    <div class="tabla">
        <table>
            <tr>
                <th class="tabla-col-12">
                    Código
                </th>
                <th class="tabla-col-40">
                    Nombre
                </th>
                <th class="tabla-col-12">
                    Fecha
                </th>
                <th class="tabla-col-12">
                    Motivo
                </th>
                <th class="tabla-col-12">
                    Ver todo
                </th>
            </tr>
            <?php
                while ($columna = mysqli_fetch_array( $resultado)){
                    echo '<tr>
                    <td class="tabla-col-12">
                        '. $columna['id'] .'
                    </td>
                    <td class="tabla-col-40">
                    '. $columna['id-persona'] .'
                    </td>
                    <td class="tabla-col-12">
                    '. $columna['fecha'] .'
                    </td>
                    <td class="tabla-col-12">
                    '. $columna['motivo'] .'
                    </td>
                    <td class="tabla-center">
                        <button>
                            VER TODO
                        </button>
                    </td>
                </tr>';

                }
            ?>
        </table>
    </div>
    </div>
</body>
</html>