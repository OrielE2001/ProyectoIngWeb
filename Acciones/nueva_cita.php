<?php
    include '../Complementos/navegacion.php';
?>

<div class="container-fluid contenedor">
    <div class="container cita-contenedor w-50 p-4 mt-5">
        <h3 class="text-center">Nueva Cita</h3>
        <form action="#" class="formulario-cita">
            <h4>Datos Generales</h4>
            <div class="datos-generales">
                <label for="" class="form-label">Policlínica</label>
                <select name="" id="#">
                    <option selected disable value="">Seleccione</option>
                    <option value="">Opcion 1</option>
                </select>
                <br>
                <label for="" class="form-label">Especialidad</label>
                <select name="" id="#">
                    <option selected disable value="">Seleccione</option>
                    <option value="">Opcion 1</option>
                </select>
                <br>
                <label for="" class="form-label">Doctor</label>
                <select name="" id="#">
                    <option selected disable value="">Seleccione</option>
                    <option value="">Opcion 1</option>
                </select>
            </div>
            <h4>Atención disponible para</h4>
            <div class="atencion-disp">
                <label for="" class="form-label">Fecha</label>
                <select name="" id="#">
                    <option selected disable value="">Seleccione</option>
                    <option value="">Opcion 1</option>
                </select>
            </div>
            <h4>Datos del paciente</h4>
            <div class="datos-paciente">
                <label for="" class="form-label">Nombre Completo</label>
                <input type="text" name="" require class="form-input">
                <label for="" class="form-label">Cédula</label>
                <input type="text" name="" require class="form-input">
                <br>
                <div class="seguro d-flex">
                    <label for="" class="form-label">¿Posee Seguro Médico?</label>
                    <div>
                        <input class="form-check-input" type="radio" value="" name="seguro">
                        <label for="" class="form-check-label">Si</label>
                        <input class="form-check-input" type="radio" value="" name="seguro">
                        <label for="" class="form-check-label">No</label>
                    </div>
                </div>
                <label for="" class="form-label">Correo Electrónico</label>
                <input type="email" name="" require class="form-input">
                <br>
                <label for="" class="form-label">Número Telefónico</label>
                <input type="text" name="" require class="form-input">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn boton-nueva-cita">Enviar Solicitud</button>
            </div>
        </form>
    </div>
</div>

<?php
    include '../Complementos/pie.php'
?>