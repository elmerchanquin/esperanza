<?php
$server = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica Esperanza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../estilos.css">
    <script src="main.js"></script>
    <style>
        body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('../public/assets/img/backgroud-login.jpg');
        }

        html {
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="contenedor_login">
        <div class="centro">
            <img src="http://localhost/public/assets/img/logo.png" alt="" height="100px">
            <form action="<?php echo "http://$server/login/"; ?>" method="POST" autocomplete="off">
                <div class="campo_login">
                    <input id="myID" type="text" placeholder="Usuario:" name="usuario" required>
                </div>
                <div class="campo_login">
                    <input type="password" placeholder="Contraseña:" name="contrasena" required>
                </div>
                <div class="campo_login">
                    <button>Iniciar sesión</button>
                </div>
            </form>
            <p>¿Aún no tienes una cuenta? <a href="<?php echo "http://$server/register/"; ?>">Registrarse ahora.</a></p>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    require 'Conexion.php';
    $sql = "SELECT usuario, contrasena FROM usuarios WHERE usuario = '" . $usuario . "'";
    $resultado = $mysqli->query($sql);
    if ($fila = $resultado->fetch_assoc()) {
        $dbUsuario = $fila['usuario'];
        $dbContrasena = $fila['contrasena'];
        if ($dbContrasena == $contrasena) {
            session_start();
            $_SESSION['usuario'] = $dbUsuario;
            print("<script type='text/javascript'>
            window.location='http://$server/'
            </script>");
        }
    } else { }
}
?>