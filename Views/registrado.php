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
    $consulta = "SELECT * FROM persona ORDER BY codigo DESC LIMIT 1;";
    $mysqli->set_charset("utf8");
    $query = mysqli_query($mysqli, $consulta);
    $resultado = mysqli_fetch_array($query);

    $cod = $resultado['codigo'];

    $consulta2 = "SELECT * FROM historial WHERE id_persona=$cod;";
    $mysqli->set_charset("utf8");
    $query2 = mysqli_query($mysqli, $consulta2);
    $resultado2 = mysqli_fetch_array($query2);

        $myArray = explode('-', $resultado["nacimiento"]);
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
        <div class="contenedor">
            <div class="contenedor_datos_persona">
                <div>
                    <h2>
                        <?php print($resultado["nombre"])?>
                    </h2>
                </div>
                <div>
                    <p>
                        Código N° <?php print($resultado["codigo"])?>
                    </p>
                </div>
                <div>
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
                <div>
                    <p>
                        DPI: <?php print($resultado["identificacion"])?>
                    </p>
                </div>
                <div>
                        <span>
                            Teléfono: <?php print($resultado["telefono"])?>
                        </span>
                        <span>
                            Correo: <?php print('antoniobanderas@antoniobanderas.com')?>
                        </span>
                </div>
                <div>
                    <p>
                        Dirección: <?php print($resultado["direccion"])?>
                    </p>
                </div>
                <div>
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
                <div>
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
                <div>
                    <div>
                        <!-- Menú de tablas -->
                        <div>
                            Antecedentes Médicos
                        </div>
                        <div>
                            Antecedentes Traumaticos
                        </div>
                        <div>
                            Antecedentes Quirurgicos
                        </div>
                        <div>
                            Antecedentes Alergicos
                        </div>
                        <div>
                            Antecendes Gineco-obstetricos
                        </div>
                    </div>
                    <div>
                        <!-- Tablas -->
                        <div>
                            <?php print($resultado["antecedentes_medicos"])?>
                        </div>
                        <div>
                            <?php print($resultado["antecedentes_traumaticos"])?>
                        </div>
                        <div>
                            <?php print($resultado["antecedentes_quirugico"])?>
                        </div>
                        <div>
                            <?php print($resultado["antecedentes_alergicos"])?>
                        </div>
                        <div>
                            <?php print($resultado["antecedentes_gineco_obstetricos"])?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor_registros">
                <div class="contenedor_historial">
                    <h2>
                        Historial Médico
                    </h2>
                    <div>
                        <div>
                            <div>
                                <span>
                                    <?php print($resultado2["fecha"])?>
                                </span>
                                <span>
                                    Dra. Erika Pérez
                                </span>
                            </div>
                        </div>
                        <div>
                            <h3>
                                <?php print($resultado2["motivo"])?>
                            </h3>
                            <p>
                                <?php print($resultado2["historia"])?>
                            </p>
                        </div>
                    </div>
                    <div>
                        <b>
                            Aún no se ha creado un historial, crealo ahora.
                        </b>
                        <button>
                            CREAR HISTORIAL
                        </button>
                    </div>
                </div>
                <div class="contenedor_consultas">
                    <h3>
                        Consultas
                    </h3>
                    <div>
                        <b>
                            Aún no se ha creado ninguna consulta, crea la primera consulta.
                        </b>
                        <button>
                            NUEVA CONSULTA
                        </button>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
