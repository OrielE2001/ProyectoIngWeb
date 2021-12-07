<?php 
    session_start();

    require '../Db/database.php';
    if (isset($_SESSION['usuario_id'])){
        $user_id = $_SESSION['usuario_id'];
        $query = "SELECT id, usuario, contrasena, rol FROM usuarios WHERE id = '$user_id'";
        $results = mysqli_query($connection, $query);
        $user_data = mysqli_fetch_assoc($results);

        $user = null;

        if(!empty($user_data)){
            $user = $user_data;
        }
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fe0dda9e61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Assets/css/style.css">
    <title>Sistema de Gestión CSS</title>
    <script src="../Assets/js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container-fluid" style="background-color: #0A0860;">
        <img src="../img/banner.png" alt="banner_CSS">
    </div>

    <!--Navbar principal-->

    <nav class="navbar navbar-expand-lg  p-3">
    <div class="container-fluid">
        <a class="navbar-brand nav-logo" href="#">LOGO</a>
        <button class="navbar-toggler navbar-light colapsar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 navbar-dark">
                <li class="nav-item">
                <a class="nav-link inicio" aria-current="page" href="../Interfaces/bienvenida.php">Inicio</a>
                </li>
                <?php if($user['rol'] == 2):?>
                <li class="nav-item">
                <a class="nav-link" href="../Interfaces/agenda.php">Agenda</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                <a class="nav-link principal" href="../Acciones/nueva_cita.php">Nueva Cita</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../Interfaces/historial.php">Historial</a>
                </li>
                <li class="nav-item">
                <a class="nav-link servicios" href="#">Servicios</a>
                </li>
            </ul>
            <a href="../logout.php" class="usuario">Cerrar Sesión <i class="fas fa-sign-out-alt"></i></a>
        </div>
    </div>
    </nav>