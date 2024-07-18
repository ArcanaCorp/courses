<?php 

    require '../config/connect.php';

    session_start(); 

    if (isset($_SESSION['user'])) {

        $user = $_SESSION['user'];

        if (isset($_GET['user']) && $_GET['user'] != $user['id']) {
            // Si el user de la sesión no coincide con el user de la URL, realiza la consulta a la base de datos
            $userId = $_GET['user']; 
            $sql = 'SELECT * FROM usuarios WHERE id_usuario = :userId';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':userId' => $userId]);
            $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        } else {

            $userInfo = $user;

        }

    } else if (isset($_GET['user'])) {
        // Si no hay sesión pero hay un user en la URL, realiza la consulta a la base de datos
        $userId = $_GET['user']; 
        $sql = 'SELECT * FROM usuarios WHERE id_usuario = :userId';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':userId' => $userId]);
        $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);

    } else {
        echo 'No user found';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $userInfo['name'];?> | EducaOnline</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>

    <link rel="stylesheet" href="http://localhost/courses/static/css/global.css">
    <link rel="stylesheet" href="http://localhost/courses/layout/header.css">
    <link rel="stylesheet" href="http://localhost/courses/profile/profile.css">

</head>
<body>

    <?php require(dirname(__DIR__) . '../layout/header.php'); ?>

    <main class="main" id="main">

        <div class="content">

            <div class="box">

                <div class="banner-profile-data">

                    <div class="banner-profile" style="background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20230408/pngtree-rainbow-curves-abstract-colorful-background-image_2164067.jpg);">
                        <div class="photo-profile">
                            <div class="content-photo">
                                <img class="photo" src="https://ui-avatars.com/api/?name=<?php echo $userInfo['name'];?>" alt="" />
                            </div>
                        </div>
                        <button class="btn btn-portada">
                            <span class="ico"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-camera"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" /><path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg></span>
                            <span class="txt">Editar la foto de portada</span>
                        </button>
                    </div>

                    <div class="banner-info">

                        <div class="name">
                            <h2><?php echo $userInfo['name'];?></h2>
                            <p>Free</p>
                        </div>

                    </div>
            
                </div>

            </div>

        </div>

    </main>

</body>
</html>