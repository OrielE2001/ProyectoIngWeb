<?php
    include '../Partials/navegacion.php';
?>

<div class="container-fluid contenedor agenda">
    <div class="d-flex">
        <span>Listado de Pacientes <i class="far fa-calendar-alt"></i></span>
        <p>(Time)</p>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CÉDULA</th>
                <th scope="col">HORA ATENCIÓN</th>
                <th scope="col">ESTADO</th>
                <th scope="col">DIAGNÓSTICO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>dato</td>
                <td>dato</td>
                <td>dato</td>
                <td>dato</td>
                <td>
                    <ul>
                        <li><a href=""><i class="far fa-edit"></i></a></li>
                        <li><a href=""><i class="far fa-file-alt"></i></a></li>
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
            </tr>
        </tbody>
    </table>
    <h5>NÚMERO DE PACIENTES PARA HOY: 5</h5>
</div>

<?php
    include '../Partials/pie.php'
?>