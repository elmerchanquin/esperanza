<!DOCTYPE html>
<html lang>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica Esperanza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../estilos.css"/>
</head>
<body>
    <?php
        include 'parts/header.php';
    ?>
        <div class="cabecera">
            <div class="titulo">
                <h1>
                    Nueva Persona
                </h1>
            </div>
        </div>
        <div class="contenedor">
            <form action="" autocomplete="off" method='POST'>
                <div class="campo">
                    <input type="text" placeholder="Nombre completo" name="nombre" required>
                </div>
                <div class="campo">
                    <input type="text" placeholder="Télefono" name="telefono"  required>
                </div>
                <div class="campo">
                    <input type="text" placeholder="DPI" name="dpi" required>
                </div>
                <div class="campo">
                    <input type="text" placeholder="País de nacimiento" required name='pais'>
                </div>
                <div class="campo">
                    <input type="text" placeholder="Departamento de nacimiento" name="departamento" required>
                </div>
                <div class="campo">
                    <input type="text" placeholder="Ciudad de nacimiento" name="ciudad" required>
                </div>
                <div class="campo">
                    <input type="text" placeholder="País de residencia (Dejar en blanco si es el de nacimiento)"
                    name='pais2'>
                </div>
                <div class="campo">
                    <input type="text" placeholder="Departamento de residencia (Dejar en blanco si es el de nacimiento)"
                    name="departamento">
                </div>
                <div class="campo">
                    <input type="text" placeholder="Ciudad de residencia (Dejar en blanco si es el de nacimiento)"
                    name="ciudad">
                </div>
                <div class="campo">
                    <input type="text" placeholder="Dirección de residencia" name="direccion" required>
                </div>
                <div class="campo">
                    <label for="genero">Genero</label>
                    <input type="radio" name="genero" value="1" checked required><span>Hombre</span>
                    <input type="radio" name="genero" value="2" required> <span>Mujer</span>
                </div>
                <div class="campo">
                    <select name="estadoCivil" id="">
                        <option disabled selected>Selecionar estado civil</option>
                        <option value="1">Soltero</option>
                        <option value="2">Casado</option>
                        <option value="3">Divorciado</option>
                    </select>
                </div>
                <div class="campo">
                    <input type="text" name="ocupacion" placeholder="Ocupación" required>
                </div>
                <div class="campo">
                    <select name="escolaridad" id="" required>
                        <option disabled selected>Selecionar nivel de estudios</option>
                        <option value="1">Estudiante</option>
                        <option value="2">Empleado</option>
                        <option value="3">Desempleado</option>
                        <option value="4">Independiente</option>
                    </select>
                </div>
                <div class="campo">
                    <input type="date" placeholder="Fecha de Nacimiento" name="nacimiento" max="<?php echo date('d')."/".date('m')."/".date('Y');?>" required>
                </div>
                <div class="campo">
                    <button name="" class="form-button">Guardar</button>
                </div>
            </form>
            <?php
                if (isset($_POST['nombre'])) {
                    NuevaPersona::AgregarPersona();
                } else {
                }
            ?>
        </div>
</body>
</html>