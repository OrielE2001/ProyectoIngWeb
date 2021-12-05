<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fe0dda9e61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Assets/style.css">
    <title>Sistema de Gestión CSS</title>
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
                <a class="nav-link inicio" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Agenda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link principal" href="#">Nueva Cita</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Historial</a>
                </li>
                <li class="nav-item">
                <a class="nav-link servicios" href="#">Servicios</a>
                </li>
            </ul>
            <a href="#" class="usuario">Nombre Usuario <i class="fas fa-cog"></i></a>
        </div>
    </div>
    </nav>