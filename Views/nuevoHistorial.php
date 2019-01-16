<?php
   /* require_once 'app\Controllers\Conexion.php'; */
?>
<!DOCTYPE html>
<html>
<head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica Esperanza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilos.css" />
</head>
<body>
    <div class="contenedor">
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
        <div class="titulo">
            <h1>
                Nueva Persona
            </h1>
        </div>
        <div class="form-persona">
            <form action="agregando-persona.php" autocomplete="off">
                <div class="campo">
                    <input type="text" placeholder="Nombre" name="nombre" required>
                    <p>Nombre completo del paciente.</p>
                </div>
                <div class="campo">
                    <input type="text" placeholder="Télefono" name="telefono"  required>
                    <p>Número de teléfono del paciente sin extensión teléfonica.</p>
                </div>
                <div class="campo">
                    <input type="text" placeholder="DPI" name="dpi" required>
                    <p>Número de identificación del país del paciente.</p>
                </div>
                <div class="campo">
                    <select name="pais" id="">
                        <?php
                            while ($columna = mysqli_fetch_array( $resultado)){
                                echo '<option value="' . $columna['codigo'] . '">
                                    '. $columna['pais'] .' </option>';
                            }
                        ?>
                    </select>
                    <p>Seleccióne el país de residencia del paciente</p>
                </div>
                <div class="campo ocultar">
                    <input type="text" placeholder="Departamento" name="departamento" required>
                    <p>Departamento de nacimiento del paciente.</p>
                </div>
                <div class="campo ocultar">
                    <input type="text" placeholder="Ciudad" name="ciudad" required>
                    <p>Ciudad de nacimiento del paciente.</p>
                </div>
                <div class="campo">
                    <select name="pais" id="">
                        <?php
                            while ($columna = mysqli_fetch_array( $resultado)){
                                echo '<option value="' . $columna['codigo'] . '">
                                    '. $columna['pais'] .' </option>';
                            }
                        ?>
                    </select>
                    <p>Seleccióne el país de residencia del paciente. (No seleccione ninguno si es el mismo de nacimiento)</p>
                </div>
                <div class="campo ocultar">
                    <input type="text" placeholder="Departamento" name="departamento" required>
                    <p>Departamento de residencia del paciente.</p>
                </div>
                <div class="campo ocultar">
                    <input type="text" placeholder="Ciudad" name="ciudad" required>
                    <p>Ciudad de residencia del paciente.</p>
                </div>
                <div class="campo">
                    <input type="text" placeholder="Dirección" name="direccion" required>
                    <p>Dirección del paciente.</p>
                </div>
                <div class="campo">
                    <label for="genero">Genero</label>
                    <input type="radio" name="genero" value="1" checked required> <span>Hombre</span>
                    <input type="radio" name="genero" value="2" required> <span>Mujer</span>
                    <p>Genero del paciente.</p>
                </div>
                <div class="campo">
                    <input type="text" placeholder="Estado Civil" name="estadoCivil" required>
                    <p>Estado civil del paciente.</p>
                </div>
                <div class="campo">
                    <select name="" id="">
                        <option value="">Estudiante</option>
                        <option value="">Empleado</option>
                        <option value="">Desempleado</option>
                        <option value="">Independiente</option>
                    </select>
                    <p>Ocupación del paciente.</p>
                </div>
                <div class="campo">
                    <input type="date" placeholder="Fecha de Nacimiento" name="nacimiento" max="<?php echo date('d')."/".date('m')."/".date('Y');?>" required>
                </div>
                <div class="campo">
                    <button class="form-button">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>