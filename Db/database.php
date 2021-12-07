<?php
 $connection = mysqli_connect('localhost', 'root', "", 'gestion-css');
 if($connection){
    echo "Se ha conectado de manera satisfactoria a la Base de Datos";
 }else{
    die ("No se ha podido establecer conexión a la Base de Datos");
 }
?>