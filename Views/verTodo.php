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

        $myArray = explode('-', $resultado["nacimiento"]);

        $cod = $resultado['codigo'];

        $consulta2 = "SELECT * FROM historial WHERE id_persona=$cod;";
        $mysqli->set_charset("utf8");
        $query2 = mysqli_query($mysqli, $consulta2);
        $resultado2 = mysqli_fetch_array($query2);


            $consulta3 = "SELECT * FROM consultas WHERE id_persona=$cod;";
            $mysqli->set_charset("utf8");
            $query3 = mysqli_query($mysqli, $consulta3);
            $resultado3 = $mysqli->query($consulta3);

        ?>
    <?php
    function edad($anoNacimiento, $mesNacimiento, $diaN){

    $anoNacimiento;
    $anoActual = 2019;
    $edad = $anoActual - $anoNacimiento;
    /* $contenedor = array();
    $a = 0;
    for($i=1900;$i<=2040;$i+=4)
    {
        $contenedor[$a] = $i;
        $a++;
    }
    for($i=$anoNacimiento;$i<=$anoActual;$i++)
    {
        $contenedor[$a] = $i;
        $a++;
    }
    function cuenta_veces_valor($array, $valor) {
        $contadores = array_count_values($array);
        return $contadores[$valor];
    }
    $anoB = 0;
    $anoN = 0;
    for ($z=$anoNacimiento ; $z <= $anoActual ; $z++) {
        if (cuenta_veces_valor($contenedor, $z) == 2) {
            $anoB++;
        } else {
            $anoN++;
        }

    }

    $diasB = $anoB * 366;
    $diasN = $anoN * 365; */

    /* MESES */

    $mesNacimiento;
    $mesActual = 2;

    $meses =  $mesActual - $mesNacimiento;
    if ($meses < 0) {
        print($edad-1);
    } elseif ($meses > 0) {
        print($edad);
    } elseif ($meses == 0) {
        $diaN;
        $diaA = 22;
        $dias =  $diaA - $diaN;
        if ($dias == 0) {
            print('Felíz Cumpleaños, ya tienes ' . $edad);
        } elseif ($dias < 0) {
            print($edad-1);
        } elseif ($dias > 0) {
            print($edad);
        }
    }
    }


?>
        <div class="cabecera">
            <h1>Persona</h1>
        </div>
        <div class="contenedor dividido">
            <div class="contenedor_datos_persona">
                <div class="titulo_caja">
                    <h2>
                        Datos Personales
                    </h2>
                </div>
                <div class="caja_datos_persona_nombre caja_sb">
                    <h3>
                        <?php print($resultado["nombre"])?>
                    </h3>
                </div>
                <div class="caja_sb">
                    <p>
                        Código N° <?php print($resultado["codigo"])?>
                    </p>
                </div>
                <div class="caja_sb">
                    <span>
                        Edad: <?php edad($myArray['0'],$myArray['1'],$myArray['2']);?>,
                    </span>
                    <span>
                        Sexo: <?php
                        if ($resultado["genero"] == 'f' ) {
                            print('Femenino');
                        } else {
                            print('Hombre');
                        };?>
                    </span>
                </div>
                <div class="caja_sb">
                    <p>
                        DPI: <?php print($resultado["identificacion"])?>
                    </p>
                </div>
                <div class="caja_sb">
                        <span>
                            Teléfono: <?php print($resultado["telefono"])?>
                        </span>
                </div>
                <div class="caja_sb">
                    <p>
                        Dirección: <?php print($resultado["direccion"])?>
                    </p>
                </div>
                <div class="dividido_mitad">
                    <div class="caja_sb">
                        <p>
                            Ciudad: <?php print($resultado["ciudad"])?>
                        </p>
                        <p>
                            Departamento: <?php print($resultado["departamento"])?>
                        </p>
                        <p>
                            País: <?php print($resultado["pais"])?>
                        </p>
                    </div>
                    <div class="caja_sb">
                        <p>
                            Escolaridad: <?php
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
                                print('Universidad Superior');
                            };?>
                        </p>
                        <p>
                            Estado Cívil: <?php
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
                            };?>
                        </p>
                        <p>
                            Ocupación: <?php print($resultado["ocupacion"])?>
                        </p>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="caja_sb">
                            <h3>
                                Antecendentes
                            </h3>
                        </div>
                        <!-- Menú de tablas -->
                        <ul class="caja_menu_tablas">
                            <li id="mt_1" onclick="cambiarMenu(1)" class="caja_menu active">Médicos</li>
                            <li id="mt_2" onclick="cambiarMenu(2)" class="caja_menu">Traumaticos</li>
                            <li id="mt_3" onclick="cambiarMenu(3)" class="caja_menu">Quirurgicos</li>
                            <li id="mt_4" onclick="cambiarMenu(4)" class="caja_menu">Alergicos</li>
                            <li id="mt_5" onclick="cambiarMenu(5)" class="caja_menu">Gineco-obstetricos</li>
                        </ul>
                    </div>
                    <div class="caja_tablas">
                        <!-- Tablas -->
                        <div id="ct_1" class="caja_blanca activate">
                            <?php print($resultado["antecedentes_medicos"])?>
                        </div>
                        <div id="ct_2" class="caja_blanca deactivate">
                            <?php print($resultado["antecedentes_traumaticos"])?>
                        </div>
                        <div id="ct_3" class="caja_blanca deactivate">
                            <?php print($resultado["antecedentes_quirugico"])?>
                        </div>
                        <div id="ct_4" class="caja_blanca deactivate">
                            <?php print($resultado["antecedentes_alergicos"])?>
                        </div>
                        <div id="ct_5" class="caja_blanca deactivate">
                            <?php print($resultado["antecedentes_gineco_obstetricos"])?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor_registros">
                <div>
                    <h2>
                        Registros
                    </h2>
                </div>
                <div class="contenedor_historial">
                        <h3>
                            Historial Médico
                        </h3>
                        <?php
                        if ($resultado2) {
                            print(
                                "<div class='caja caja_historial'>
                                    <div>
                                        <span>
                                            ".$resultado2['fecha']."
                                        </span>
                                    </div>
                                    <div>
                                        <h3>
                                            ".$resultado2['motivo']."
                                        </h3>
                                        <p>
                                            ".$resultado2['historia']."
                                        </p>
                                    </div>
                                </div>"
                            );
                        } else {
                            print('<b>
                                Aún no se ha creado un historial, crealo ahora.
                                </b>
                                <div>
                                <form method="POST" action="http://' . $server . '/esperanza/nuevo-historial/"><input type="hidden" name="codigo" value="'.$_POST['codigo'].'"><button type="submit">NUEVO HISTORIAL</button></a></form>
                                 </div>');
                        }
                        ?>
                </div>
                <div class="contenedor_consultas">
                    <h3>
                        Consultas
                    </h3>
                   <?php
                   if (mysqli_num_rows($resultado3)) {
                    while ($fila = $resultado3->fetch_assoc()) {
                        print("<div class='caja caja_historial'>
                        <div>
                            <span>
                                ".$fila['fecha']."
                            </span>
                        </div>
                        <div>
                            <p>
                                ".$fila['diagnostico']."
                            </p>
                        </div>
                    </div>");
                   }
                   } else {
                       print('<b>
                       Aún no se ha creado ninguna consulta, crea la primera ahora.
                        </b>');
                   }
                   ?>
                    <div>
                            <form method="POST" action="<?php echo "http://$server/esperanza/consulta/"; ?>"><input type="hidden" name="codigo" value="<?php print($_POST['codigo']) ?>"><button type="submit">NUEVA CONSULTA</button></a></form>
                    </div>
            </div>
        </div>
  </body>
</html>
