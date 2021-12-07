<?php
    include '../Partials/navegacion.php';
    $query = "SELECT id, nombre FROM policlinica";
    $resultado = mysqli_query($connection, $query);
?>


<script>
    $(document).ready(function(){
        $("#id_policlinica").change(function(){

            $("#id_policlinica option:selected").each(function(){
                id_policlinica = $(this).val();
                $.post("../includes/getDatosGenerales.php?prueba=1", { id_policlinica: id_policlinica}, function(data){
                    $("#id_especialidad").html(data);
                });
            });
        })
    });

    $(document).ready(function(){
        $("#id_especialidad").change(function(){

            $("#id_especialidad option:selected").each(function(){
                id_especialidad = $(this).val();
                $.post("../includes/getDatosGenerales.php?prueba=2", { id_especialidad: id_especialidad, id_policlinica: id_policlinica}, function(data){
                    $("#id_doctor").html(data);
                });
            });
        })
    });
</script>


<div class="container-fluid contenedor">
    <div class="container cita-contenedor w-50 p-4 mt-5">
        <h3 class="text-center">Nueva Cita</h3>

        <form action="#" class="formulario-cita">


            <h4>Datos Generales</h4>
            <div class="datos-generales">
                <label for="" class="form-label">Policlínica</label>

                <select name="nombre_policlinica" id="id_policlinica">
                    <option value="0">Seleccione Policlinica</option>
                    <?php while ($row = mysqli_fetch_assoc($resultado)) {?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                    <?php } ?>
                </select>

                <br>
                <label for="" class="form-label">Especialidad</label>
                <select name="nombre_especialidad" id="id_especialidad"></select>
                <br>
                <label for="" class="form-label">Doctor</label>
                <select name="nombre_doctor" id="id_doctor"></select>
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
    include '../Partials/pie.php'
?>