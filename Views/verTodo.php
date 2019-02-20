<!DOCTYPE html>
<html lang>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica Esperanza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../estilos.css"/>
    <style type="text/css">

      #canvas_1{
      background: url('../assets/img/anatomia.jpg');
      background-repeat: none;
      background-size: 100%;
      }

    </style>
    <script src="../main.js"></script>
</head>
<body>
    <?php
    include 'parts/header.php';
    include 'Conexion.php';
    if (isset($_POST['codigo'])){
        $codigo = $_POST['codigo'];
    }
    $consulta = "SELECT * FROM persona WHERE codigo=$codigo";
    $mysqli->set_charset("utf8");
    $query = mysqli_query($mysqli, $consulta);
    $resultado = mysqli_fetch_array($query);
    ?>
        <div class="cabecera">
            <div class="titulo">
                <h1>
                    <?php print($resultado["nombre"])?>
                </h1>
            </div>
        </div>
        <div class="contenedor">
            <form action="http://localhost/esperanza/historial/" method="POST" autocomplete="off">
                <div class="campo">
                    <label for="codigo">Código:</label>
                    <input type="text" value="<?php print($resultado["codigo"])?>" name="codigo" required disabled>
                </div>
                <div class="campo">
                    <label for="nombre">Identificación:</label>
                    <input type="text" value="<?php print($resultado["identificacion"])?>" name="nombre" disabled>
                </div>
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" value="<?php print($resultado["nombre"])?>" name="nombre" disabled>
                </div>
                <div class="campo">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" value="<?php print($resultado["telefono"])?>" name="telefono" disabled>
                </div>
                <div class="campo">
                    <label for="direccion">Dirección:</label>
                    <input type="text" value="<?php print($resultado["direccion"])?>" name="direccion" disabled>
                </div>
                <div class="campo">
                    <label for="pais">País:</label>
                    <input type="text" value="<?php print($resultado["pais"])?>" name="pais" disabled>
                </div>
                <div class="campo">
                    <label for="departamento">Departamento:</label>
                    <input type="text" value="<?php print($resultado["departamento"])?>" name="departamento" disabled>
                </div>
                <div class="campo">
                    <label for="ciudad">Ciudad:</label>
                    <input type="text" value="<?php print($resultado["ciudad"])?>" name="ciudad" disabled>
                </div>
                <?php
                    if (!$resultado['paisR'] == "" or !$resultado['paisR'] == NULL) {
                        print('<div class="campo">
                                <label for="paisR">País de Residencia:</label>
                                    <input type="text" value="' . $resultado['paisR'] . '" name="paisR" disabled>
                                </div>
                                <div class="campo">
                                    <label for="departamentoR">Departamento de Residencia:</label>
                                    <input type="text" value="' . $resultado['departamentoR'] . '" name="departamentoR" disabled>
                                </div>
                                <div class="campo">
                                    <label for="ciudadR">Ciudad de Residencia:</label>
                                    <input type="text" value="' . $resultado['ciudadR'] . '" name="ciudadR" disabled>
                                </div>');
                    };
                ?>
                <div class="campo">
                    <label for="genero">Genero:</label>
                    <input type="text" value="<?php
                    if ($resultado["genero"] == 'f' ) {
                        print('Femenino');
                    } else {
                        print('Hombre');
                    };?>" name="genero" disabled>
                </div>
                <div class="campo">
                    <label for="escolaridad">Escolaridad:</label>
                    <input type="text" value="<?php
                    if ($resultado["escolaridad"] == 1 ) {
                        print('Ninguno');
                    } elseif ($resultado["escolaridad"] == 2 ) {
                        print('Primaria');
                    } elseif ($resultado["escolaridad"] == 3 ) {
                        print('Básicos');
                    } elseif ($resultado["escolaridad"] == 4 ) {
                        print('Diversificado');
                    } elseif ($resultado["escolaridad"] == 5 ) {
                        print('Universidad');
                    } elseif ($resultado["escolaridad"] == 6 ) {
                        print('Maestría, Posgrado o Doctorado');
                    };?>" name="nombre" disabled>
                </div>
                <div class="campo">
                    <label for="estado">Estado Cívil:</label>
                    <input type="text" value="<?php
                    if ($resultado["estado_civil"] == 1 ) {
                        if ($resultado['genero'] == 'f') {
                            print('Soltera');
                        } else {
                            print('Soltero');
                        }
                    } elseif ($resultado["estado_civil"] == 2) {
                        if ($resultado['genero'] == 'f') {
                            print('Casada');
                        } else {
                            print('Casado');
                        }
                    } elseif ($resultado["estado_civil"] == 3) {
                        if ($resultado['genero'] == 'f') {
                            print('Divorciada');
                        } else {
                            print('Divorciado');
                        }
                    };?>" name="estado" disabled>
                </div>
                <div class="campo">
                    <label for="ocupacion">Ocupación:</label>
                    <input type="text" value="<?php print($resultado["ocupacion"])?>" name="ocupacion" disabled>
                </div>
                <div class="campo">
                    <input type="text" value="<?php print($resultado["nacimiento"])?>" name="fecha" required disabled>
                </div>
                <div class="campo">
                    <label for="at_medicos">Antecedentes Médico</label>
                    <textarea name="at_medicos" id="" cols="30" rows="10" required disabled><?php print($resultado["antecedentes_medicos"])?></textarea>
                </div>
                <div class="campo">
                    <label for="at_traumaticos">Antecedentes Traumáticos</label>
                    <textarea name="at_traumaticos" id="" cols="30" rows="10" required disabled><?php print($resultado["antecedentes_traumaticos"])?></textarea>
                </div>
                <div class="campo">
                    <label for="at_quirugico">Antecedentes Quirúrgicos</label>
                    <textarea name="at_quirugico" id="" cols="30" rows="10" required disabled><?php print($resultado["antecedentes_quirugico"])?></textarea>
                </div>
                <div class="campo">
                    <label for="at_alergicos">Antecedentes Alérgicos</label>
                    <textarea name="at_alergicos" id="" cols="30" rows="10" required disabled><?php print($resultado["antecedentes_alergicos"])?></textarea>
                </div>
                <div class="campo">
                    <label for="at_gineco_obstreticos">Antecedentes Gineco-obstetricos</label>
                    <textarea name="at_gineco_obstreticos" id="" cols="30" rows="10" required disabled><?php print($resultado["antecedentes_gineco_obstetricos"])?></textarea>
                </div>
                <div class="campo">
                    <button name="" class="form-button">Guardar</button>
                </div>
            </form>
        </div>
  </body>
</html>
