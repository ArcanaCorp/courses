<?php

    require '../config/connect.php';
    require '../config/constants.php';

    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['sign'])) {

            if (isset($_POST['name']) && $_POST['email'] && $_POST['pws']) {

                echo `<script>document.getElementById('btnSign').innerHTML = 'Cargando...';</script>`;

                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
                $passw = filter_var($_POST['pws'], FILTER_SANITIZE_STRING);

                $hashed_password = password_hash($passw, PASSWORD_BCRYPT);

                $date = date('Y-m-d H:i:s');

                try {

                    $very = 'SELECT * FROM usuarios WHERE email_usuario = :email';
                    $stmt = $pdo->prepare($very);
                    $stmt->execute([':email' => $email]);

                    if ($stmt->rowCount() === 1) {
                        echo `
                            <script>
                                let message = document.getElementById('message');
                                message.innerHTML = 'El usuario ya esta registrado. Intentalo de nuevo o crea una cuenta.';
                            </script>
                        `;
                        return;
                    }

                    $query = 'INSERT INTO usuarios (name_usuario, email_usuario, password_usuario, date_usuario) VALUES (:name, :email, :password, :date)';
                    $statement = $pdo->prepare($query);
                    $statement->execute(array(':name' => $name, ':email' => $email, ':password' => $hashed_password, ':date' => $date));

                    if ($statement->rowCount() > 0) {

                        $userId = $pdo->lastInsertId();
                        
                        echo `
                            <script>
                                let message = document.getElementById('message');
                                message.innerHTML = 'Estás registrado correctamente.';
                            </script>
                        `;
                        $userInfo = ['id' => $userId, 'name' => $name, 'email' => $email];
                        $_SESSION['user'] = $userInfo;
                        echo '<script>window.location.href = "'. $base_url .'";</script>';

                    } else {
                        echo `
                            <script>
                                let message = document.getElementById('message');
                                message.innerHTML = 'No pudimos registrarte. Intentalo más tarde.';
                            </script>
                        `;
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
    <title>Crear cuenta | EducaOnline</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>

    <link rel="stylesheet" href="http://localhost/courses/static/css/global.css">
    <link rel="stylesheet" href="http://localhost/courses/layout/header.css">
    <link rel="stylesheet" href="http://localhost/courses/sign/sign.css">

</head>
<body>

    <?php require(dirname(__DIR__) . '../layout/header.php'); ?>

    <main class="main" id="main">

        <div class="content">

            <div class="box">

                <form class="form" method="POST">

                    <div class="form-group">
                        <h2>Crear cuenta</h2>
                        <p>Crea una cuenta y disfruta todo lo que tenemos para ofrecerte.</p>
                    </div>

                    <div id="message" class="message"></div>

                    <div class="form-group">
                        <label class="label" for="name">Ingresa tu nombre completo</label>
                        <div class="form-control">
                            <input type="text" class="entry" name="name" id="name" autocomplete="off" placeholder="Ingresa tu nombre completo" aria-placeholder="Ingresa tu nombre completo" />
                        </div>
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
                        <button class="btn btn-primary" name="sign" id="btnSign">Registrarse</button>
                    </div>

                    <div class="form-group">
                        <span class="span span-small">¿Ya tienes una cuenta? <a href="<?php echo $base_url;?>/login">Iniciar Sesión</a></span>
                    </div>

                </form>

            </div>

        </div>

    </main>

    <script src="<?php echo $base_url?>/static/js/toogle.js"></script>

</body>
</html>