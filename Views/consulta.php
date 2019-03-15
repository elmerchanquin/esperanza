<!DOCTYPE html>
<html lang>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica Esperanza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../estilos.css"/>
    <script>
        window.onload = function(){
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth()  ; //obteniendo mes
        var dia = fecha.getDate(); //obteniendo dia
        var ano = fecha.getFullYear(); //obteniendo año
        if(dia<10)
            dia='0'+dia; //agrega cero si el menor de 10
        if(mes<10)
            mes='0'+mes //agrega cero si el menor de 10
        document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
    }
    </script>
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
                    Consulta
                </h1>
            </div>
        </div>
        <div class="contenedor">
            <form action="http://127.0.0.1/esperanza/consulta/" method="POST" autocomplete="off">
                <div class="campo">
                    <input type="hidden" value="<?php print($resultado["codigo"])?>" name="id" placeholder="Nombre del paciente">
                </div>
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" value="<?php print($resultado["nombre"])?>" disabled>
                </div>
                <div class="Historia">
                    <label for="nombre">Datos objetivos:</label>
                    <textarea name="objetivos" id="" cols="30" rows="10" placeholder="Datos que el medico puede comprobar" required></textarea>
                </div>
                <div class="Historia">
                    <label for="nombre">Datos subjetivos:</label>
                    <textarea name="subjetivos" id="" cols="30" rows="10" placeholder="Datos que el paciente indica" required></textarea>
                </div>
                <div class="Historia">
                    <label for="nombre">Nuevos datos:</label>
                    <textarea name="nuevos" id="" cols="30" rows="10" placeholder="Datos que el medico puede comprobar" required></textarea>
                </div>
                <div class="Historia">
                    <label for="nombre">Diagnostico:</label>
                    <textarea name="diagnostico" id="" cols="30" rows="10" placeholder="Datos que el medico puede comprobar" required></textarea>
                </div>
                <div class="Historia">
                    <label for="nombre">Tratamiento:</label>
                    <textarea name="tratamiento" id="" cols="30" rows="10" placeholder="Datos que el medico puede comprobar" required></textarea>
                </div>
                <div class="campo">
                    <label for="fecha">Fecha: (MES/ DÍA/ AÑO)</label>
                    <input type="date" id="fechaActual" value="" placeholder="Fecha" name="fecha" required>
                </div>
                <!-- PROXIMA CITA -->
                <div class="campo">
                    <button type="submit" class="form-button">Continuar</button>
                </div>
            </form>
        </div>
  </body>
</html>
<?php
                        require 'Conexion.php';
                if (isset($_POST['objetivos'])) {
                        $id_persona = $_POST['id'];
                        $objetivos = $_POST['objetivos'];
                        $subjetivos = $_POST['subjetivos'];
                        $nuevos = $_POST['nuevos'];
                        $diagnostico = $_POST['diagnostico'];
                        $tratamiento = $_POST['tratamiento'];
                        $fecha = $_POST['fecha'];




                        $sql = "INSERT INTO `consultas` (`id`, `fecha`, `id_persona`, `objetivos`, `subjetivos`, `nuevos_datos`,
                        `diagnostico`, `tratamiento`)
                        VALUES (NULL, '$fecha', '$id_persona', '$objetivos', '$subjetivos', '$nuevos',
                        '$diagnostico', '$tratamiento');";


                        $mysqli->set_charset("utf8");
                        if (mysqli_query($mysqli, $sql)) {
                            print('<script>
                            window.onload=function(){
                                        // Una vez cargada la página, el formulario se enviara automáticamente.
                                document.forms["miformulario"].submit();
                            }
                            </script>
                        <form name="miformulario" action="http://127.0.0.1/esperanza/ver-todo/" method="POST">
                            <input type="hidden" value="'. $_POST["id"] .'" name="codigo">
                        </form>');
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
                        }
                        mysqli_close($mysqli);

                }

            ?>
