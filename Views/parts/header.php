<header>
        <div class="logo">
                <a href="<?php 
                $server = $_SERVER['HTTP_HOST'];
                echo "http://$server/esperanza/"; ?>">
                    <img src="<?php
                    if ($myurl == '/esperanza/') {
                        print('public/assets/img/logo.jpg');
                    } else {
                        print('../assets/img/logo.jpg');
                    }
                    ?>" alt="" height="50px">
                </a>
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo "http://$server/esperanza/"; ?>">Personas</a></li>
                <li><a href="<?php echo "http://$server/esperanza/nueva-persona/"; ?>">Nueva Persona</a></li>
            </ul>
        </nav>
    </header>