<?php
    include '../Complementos/navegacion.php';
?>

<div class="container-fluid contenedor">
    <div class="span-reprogramar">
        <span>Reprogramación de Cita <i class="far fa-calendar-check"></i></span>
    </div>
    <div class="container w-50 p-4 mt-4 reprogramar-cita">
        <h4>Datos de la Cita</h4>
        <div class="row">
            <div class="col-lg-4"><b>Nombre:</b> Jose Antonio Espinoza</div>
            <div class="col-lg-4"><b>Cédula:</b> 8-3245-1344</div>
            <div class="col-lg-4"><b>Fecha Asignada:</b> 01/12/2021</div>
            <div class="col-lg-4"><b>Policlínica:</b> Dr.Arnulfo Arias Madrid</div>
            <div class="col-lg-4"><b>Especialidad:</b> Odontología</div>
            <div class="col-lg-4"><b>Doctor:</b> Dr.Cortez</div>
        </div>
        <p>A continuación seleccione la nueva fecha de atención:</p>
        <form action="#">
            <label for="" class="form-label">Nueva fecha de atención</label>
            <select name="" id="">
                <option value="" selected disabled>Seleccione</option>
            </select>
            <p><b>Nota:</b> Al realizar esta acción, no se podrá volver a repetir nuevamente la Reprogramación para esta cita.</p>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn boton-reprogramacion">Enviar Solicitud</button>
            </div>
        </form>
    </div>
</div>

<?php
    include '../Complementos/pie.php'
?>.