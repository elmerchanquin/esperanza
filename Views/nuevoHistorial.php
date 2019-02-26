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
      position: relative;
      }

    </style>
    <script src="../main.js"></script>
    <script>
    window.onload = function(){
  var fecha = new Date(); //Fecha actual
  var mes = fecha.getMonth()+1; //obteniendo mes
  var dia = fecha.getDate(); //obteniendo dia
  var ano = fecha.getFullYear(); //obteniendo año
  if(dia<10)
    dia='0'+dia; //agrega cero si el menor de 10
  if(mes<10)
    mes='0'+mes //agrega cero si el menor de 10
  document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
}
    </script>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
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
                    <label for="nombre">Nombre:</label>
                    <input type="text" value="<?php print($resultado["nombre"])?>" name="nombre" placeholder="Nombre del paciente" disabled>
                </div>
                <div class="campo">
                    <label for="motivo">Motivo:</label>
                    <input type="text" placeholder="Motivo de la consulta" name="motivo" required>
                </div>
                <div class="Historia">
                    <label for="nombre">Historia:</label>
                    <textarea name="historia" id="" cols="30" rows="10" placeholder="Historia" required></textarea>
                </div>
                <div class="campo">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fechaActual" value="" placeholder="Fecha" name="fecha" required>
                </div>
            </form>
        </div>
  </body>
</html>

