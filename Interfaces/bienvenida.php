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
            $noticias  = $conn->prepare('SELECT id, titulo_actualizacion, detalles, fecha_actualizacion FROM noticias_sistema ORDER BY fecha_actualizacion DESC');
            $noticias->execute();
            while($noticia_sistema = $noticias->fetch(PDO::FETCH_ASSOC)){
            $results ;  
            ?>
            <div class="col-12">
                <h6><?= $noticia_sistema['titulo_actualizacion']?> D: <?= $noticia_sistema['fecha_actualizacion'] ?></h6>
                <p><?= $noticia_sistema['detalles'] ?></p>
                <a href="https://www.youtube.com/" target="_blank">Leer notas completas de la actualización</a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php
    include '../Partials/pie.php'
?>