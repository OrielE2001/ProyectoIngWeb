<?php
    session_start();

    require 'Db/database.php';

    if(isset($_SESSION['usuario_id'])){
        $user_id = $_SESSION['usuario_id'];
        $query = "SELECT id, usuario, contrasena, rol FROM usuarios WHERE id = '$user_id'";
        $results = mysqli_query($connection, $query);
        $recovery = mysqli_fetch_assoc($results);

        $user = null;

        if(count($recovery)>0){
            $user = $recovery;
        }
        mysqli_close($connection);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php if(!empty($user)): ?>
    <br>Bienvenido. <?= $user['usuario']?> 
    <br>Estas ingresado en el sistema
    <a href="logout.php">Logout</a>
    <?php else: ?>
    <h1>Porfavor Inicie Sesión o Registrese</h1>
    <a href="login.php">Login</a> or
    <a href="signup.php">Signup</a>
    <?php endif; ?>
</body>
</html>