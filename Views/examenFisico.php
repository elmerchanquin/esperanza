<!DOCTYPE html>
<html lang>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica Esperanza</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../estilos.css"/>
    <style type="text/css">

      #canvas_1{
      background: url('../assets/img/anatomia.jpg');
      background-repeat: none;
      background-size: 100%;
      position: relative;
      }

    </style>
    <script src="../main.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<?php
    include 'Conexion.php';
    if (isset($_POST['codigo'])){
        $codigo = $_POST['codigo'];
    }
    $consulta = "SELECT id FROM historial ORDER BY id DESC LIMIT 1;";
    $mysqli->set_charset("utf8");
    $query = mysqli_query($mysqli, $consulta);
    $resultado = mysqli_fetch_array($query);
    ?>
<body>

        <canvas id="canvas_1" width="700" height="600   "></canvas>

        <div class="contenedor">

            <form action="http://localhost/esperanza/historial/" method="POST" autocomplete="off">

                <div class="contenedor-examen">
                <input type="text" value="<?php print($resultado["id"])?>" name="cod_historial" >
                <div class="contenedor-comentarios">
                    <?php
                $a = 0;
                    while ($a <= 0) {
                        print('
                        <div class="contenedor-comentario">
                            <form action="">
                                <input type="text" placeholder="Cordenadas" id="cordenadas" readonly>
                                <input type="file">
                            </form>
                        </div>
                        <div class="contenedor-comentario">
                        <h3>Comentario</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="contenedor-comentario-fotos">
                            <img src="../assets/img/anatomia.jpg" alt="hola">
                            <img src="../assets/img/anatomia.jpg" alt="hola">
                            <img src="../assets/img/anatomia.jpg" alt="hola">
                        </div>
                        </div>
                        ');
                        $a++;
                    }
                ?>
                </div>
            </div>
                <div class="campo">
                    <button name="" class="form-button">Guardar</button>
                </div>
            </form>
        </div>
  </body>
</html>
<?php
                        require 'Conexion.php';
                if (isset($_POST['motivo'])) {
                        $id_persona = $_POST['id'];
                        $motivo = $_POST['motivo'];
                        $historia = $_POST['historia'];
                        $peso = $_POST['peso'];
                        $estatura = $_POST['estatura'];
                        $temperatura = $_POST['temperatura'];
                        $fecha = $_POST['fecha'];
                        $cardiaca = $_POST['cardiaca'];
                        $respiratoria = $_POST['respiratoria'];
                        $oxigeno = $_POST['oxigeno'];
                        $arterial = $_POST['id'];




                        $sql = "INSERT INTO `historial` (`id`, `id_persona`, `fecha`, `motivo`, `historia`, `peso`,
                        `estatura`, `frecuencia_cardiaca`, `frecuencia_respiratoria`, `temperatura`, `presion_arterial`, `saturacion_oxigeno`)
                        VALUES (NULL, '$id_persona', '$fecha', '$motivo', '$historia', '$peso',
                        '$estatura', '$cardiaca', '$respiratoria', '$temperatura', '$arterial', '$oxigeno');";


                        $mysqli->set_charset("utf8");
                        if (mysqli_query($mysqli, $sql)) {
                            print('<script type="text/javascript">
                            document.location = "http://127.0.0.1/esperanza/examen-fisico/";
                        </script> ');
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
                        }
                        mysqli_close($mysqli);

                        
                        
                }

            ?>