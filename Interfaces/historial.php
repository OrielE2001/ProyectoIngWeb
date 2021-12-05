<?php
    include '../Complementos/navegacion.php';
?>

<div class="container-fluid contenedor historial">
    <div>
        <span>Historial <i class="fas fa-history"></i></span>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CÉDULA</th>
                <th scope="col">FECHA</th>
                <th scope="col">ESPECIALIDAD</th>
                <th scope="col">ESTADO</th>
                <th scope="col">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>dato</td>
                <td>dato</td>
                <td>dato</td>
                <td>dato</td>
                <td>dato</td>
                <td>
                    <ul class="h-list">
                        <li><a href="#" class="h-reprogramar">REPROGRAMAR</a></li>
                        <li><a href="#" class="h-cancelar">CANCELAR</a></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>dato</td>
                <td>dato</td>
                <td>dato</td>
                <td>dato</td>
                <td>dato</td>
                <td>dato</td>
            </tr>
        </tbody>
    </table>
    <h5>NÚMERO DE ACCIONES REALIZADAS: 5</h5>
</div>

<?php
    include '../Complementos/pie.php'
?>