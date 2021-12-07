<?php
    include '../Partials/navegacion.php';
?>

<!--Página Principal-->
<div class="container-fluid contenedor">
    <h2 class="text-center mt-2 mb-3">¡Bienvenido <?= $user['usuario']?>!</h2>
    <div class="container n-sistema">
        <h3>Noticias del sistema</h3>
        <div class="row justify-content-center">
            <?php
            global $connection;
            $query  = "SELECT id, titulo_actualizacion, detalles, fecha_actualizacion FROM noticias_sistema ORDER BY fecha_actualizacion DESC";
            $results = mysqli_query($connection, $query);
            while($noticias = mysqli_fetch_assoc($results)){
            ?>
            <div class="col-12">
                <h6><?= $noticias['titulo_actualizacion']?> D: <?= $noticias['fecha_actualizacion'] ?></h6>
                <p><?= $noticias['detalles'] ?></p>
                <a href="https://www.youtube.com/" target="_blank">Leer notas completas de la actualización</a>
            </div>
            <?php 
                } 
                mysqli_close($connection);
            ?>
        </div>
    </div>
</div>

<?php
    include '../Partials/pie.php'
?>