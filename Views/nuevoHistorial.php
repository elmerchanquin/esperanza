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
    $consulta = "SELECT nombre FROM persona WHERE codigo=$codigo";
    $mysqli->set_charset("utf8");
    $query = mysqli_query($mysqli, $consulta);
    $resultado = mysqli_fetch_array($query);
    ?>
        <div class="cabecera">
            <div class="titulo">
                <h1>
                    Nuevo Historial
                </h1>
            </div>
        </div>
        <div class="contenedor">
            <form action="http://localhost/esperanza/historial/" method="POST" autocomplete="off">
                <div class="campo">
                    <input type="text" value="<?php print($resultado["nombre"])?>" name="nada" placeholder="Nombre del paciente" disabled>
                </div>
                <div class="campo">
                    <input type="text" placeholder="Motivo de la consulta" name="motivo" required>
                </div>
                <div class="Historia">
                    <textarea name="historia" id="" cols="30" rows="10" placeholder="Historia" required></textarea>
                </div>
                <div class="campo">
                    <input type="date" placeholder="Fecha" name="fecha" max="<?php echo date('d') . "/" . date('m') . "/" . date('Y'); ?>" required>
                </div>
                <div class="contenedor-examen">
                <div class="contenedor-imagen">
                    <canvas id="canvas_1" width="300" height="268"></canvas>
                </div>
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
