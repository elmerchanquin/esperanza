<header>
        <div class="logo">
                <a href="http://127.0.0.1/esperanza/">
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
                <li><a href="http://127.0.0.1/esperanza/">Personas</a></li>
                <li><a href="http://127.0.0.1/esperanza/nueva-persona/">Nueva Persona</a></li>
            </ul>
        </nav>
    </header>