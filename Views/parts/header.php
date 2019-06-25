<?php
session_start();
if (isset($_SESSION['usuario'])) { } else {
    $server = $_SERVER['HTTP_HOST'];
    echo "
            <script type='text/javascript'>
            window.location='http://$server/login/'
            </script>
            ";
}
?>
<header>
    <div class="header_return">
        <div class="header_icons">
            <img src="<?php
                        if ($myurl == '/') {
                            print('public/assets/img/return.svg');
                        } else {
                            print('../assets/img/return.svg');
                        }
                        ?>" alt="" width="24px">
        </div>
    </div>
    <div class="header_logo">
        <div class="logo">
            <a href="<?php echo "http://$server/"; ?>">
                <img src="<?php echo "http://$server/"; ?>public/assets/img/logo-horizontal.png" alt="" height="50px">
            </a>
        </div>
    </div>
    <div class="header_buttons">
        <div class="header_icons">
            <a href="<?php echo "http://$server/cerrar-sesion/"; ?>">
                 <img src="<?php echo "http://$server/"; ?>public/assets/img/close.svg" alt="" width="24px">
            </a>
        </div>
        <div class="header_icons">
            <a href="">
                <img src="<?php echo "http://$server/"; ?>public/assets/img/anillo.svg" alt="" width="24px">
            </a>
        </div>
        <div class="header_icons">
            <img src="<?php
                        if ($myurl == '/') {
                            print('public/assets/img/question.svg');
                        } else {
                            print('../assets/img/question.svg');
                        }
                        ?>" alt="" width="24px">
        </div>
    </div>
</header>