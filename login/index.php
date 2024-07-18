<?php

    require '../config/connect.php';
    require '../config/constants.php';

    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['login'])) {

            if ($_POST['email'] && $_POST['pws']) {

                echo `<script>document.getElementById('btnSign').innerHTML = 'Cargando...';</script>`;

                $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
                $passw = filter_var($_POST['pws'], FILTER_SANITIZE_STRING);

                try {

                    $very = 'SELECT * FROM usuarios WHERE email_usuario = :email';
                    $stmt = $pdo->prepare($very);
                    $stmt->execute([':email' => $email]);
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);

                    if ($user && password_verify($passw, $user['password_usuario'])) {

                        $userInfo = ['id' => $user['id_usuario'], 'name' => $user['name_usuario'], 'email' => $user['email_usuario']];
                        $_SESSION['user'] = $userInfo;
                        echo '<script>window.location.href = "'. $base_url .'";</script>';
                    }


                } catch (PDOException $e) {
                    echo `
                        <script>
                            let message = document.getElementById('message');
                            message.innerHTML = 'Hubo un error interno en el servidor';
                        </script>
                    `;
                }

            } else {

                echo `
                    <script>
                        let message = document.getElementById('message');
                        message.innerHTML = 'Hubo un error interno en el servidor';
                    </script>
                `;

            }

        } else {

            echo `
                <script>
                    let message = document.getElementById('message');
                    message.innerHTML = 'Hubo un error interno en el servidor';
                </script>
            `;

        }

    } else {

        echo `
            <script>
                let message = document.getElementById('message');
                message.innerHTML = 'Hubo un error interno en el servidor';
            </script>
        `;

    }

    if (isset($_SESSION['user'])) {
        echo '<script>window.location.href = "'. $base_url .'";</script>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | EducaOnline</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>

    <link rel="stylesheet" href="http://localhost/courses/static/css/global.css">
    <link rel="stylesheet" href="http://localhost/courses/layout/header.css">
    <link rel="stylesheet" href="http://localhost/courses/login/login.css">
    
</head>
<body>

    <?php require(dirname(__DIR__) . '../layout/header.php'); ?>

    <main class="main" id="main">

        <div class="content">

            <div class="box">

                <form class="form" method="POST">

                    <div class="form-group">
                        <h2>Iniciar Sesión</h2>
                        <p>Ingresa a tu cuenta para disfrutar tus beneficios.</p>
                    </div>

                    <div class="form-group">
                        <label class="label" for="email">Ingresa tu Email o correo electrónico</label>
                        <div class="form-control">
                            <input type="email" class="entry" name="email" id="email" autocomplete="off" placeholder="Ingresa tu Email o correo electrónico" aria-placeholder="Ingresa tu Email o correo electrónico" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label" for="pws">Ingresa tu contraseña</label>
                        <div class="form-control">
                            <input type="password" class="entry entry-password" name="pws" id="pws" autocomplete="off" placeholder="Ingresa tu contraseña" aria-placeholder="Ingresa tu contraseña" />
                            <span class="ico" id="toogle"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" name="login">Iniciar Sesión</button>
                    </div>

                    <div class="form-group">
                        <span class="span span-small">¿Aún no tienes una cuenta? <a href="<?php echo $base_url;?>/sign">Crear cuenta</a></span>
                    </div>

                </form>

            </div>

        </div>

    </main>

    <script src="<?php echo $base_url?>/static/js/toogle.js"></script>

</body>
</html>