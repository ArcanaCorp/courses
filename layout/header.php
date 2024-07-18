<?php 
    
    require(dirname(__DIR__) . '\config\constants.php'); 

    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }

    if (isset($_POST['logout'])) {

        session_destroy();

        echo '<script>window.location.href = "'. $base_url .'";</script>';

    }

?>

<header  class="header">

    <div class="content-header">
        <div class="col col_head">

            <a href="<?php echo $base_url;?>" class="logo">
                <img src="http://localhost/courses/static/img/Logo.png" class="menu-icono" alt="Logo">
            </a>

        </div>

        <div class="col col_search">
            <input list="opcionesCursos" class="search-input" placeholder="Buscar ...">
        </div>
        
        <div class="col col_nav">  
            <a href="<?php echo $base_url;?>/prices" class="precios"> Precios </a>
            <?php if (!isset($user)) { ?>
                <a href="<?php echo $base_url;?>/sign" class="cuenta">Crear Cuenta</a>
                <a href="<?php echo $base_url;?>/login" class="cuenta cuenta--active">Iniciar Sesión</a>
            <?php } else { ?>
                <a href="<?php echo $base_url;?>/profile/<?php echo $user['id'];?>" class="cuenta"><?php echo $user['name']; ?></a>
                <form method="POST">
                    <button class="btn btn-logout" name="logout"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg></button>
                </form>
            <?php } ?>
        </div>
    </div>
  

</header > 