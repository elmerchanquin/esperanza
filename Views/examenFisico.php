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
<body>

        <canvas id="canvas_1" width="700" height="600   "></canvas>

        <div class="contenedor">

            <form action="http://localhost/esperanza/historial/" method="POST" autocomplete="off">

                <div class="contenedor-examen">

                <div class="contenedor-imagen">

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
