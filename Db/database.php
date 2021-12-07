<?php
 $connection = mysqli_connect('localhost', 'root', "", 'gestion-css');
 if($connection){
   /*Conexion exitosa a la base de datos*/
 }else{
    die ("No se ha podido establecer conexión a la Base de Datos");
 }
?>