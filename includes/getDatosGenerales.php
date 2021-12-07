<?php 

    require '../Db/database.php';
    $seleccionador = $_GET['prueba'];
    $id_policlinica = $_POST['id_policlinica'];
    $id_especialidad = $_POST['id_especialidad'];
    $id_doctor = $_POST['id_doctor'];
    $id_fecha = $_POST['id_fecha'];

    switch ($seleccionador){

        case 1:
            $query = "SELECT DISTINCT policlinica_especialidad.id_especialidad AS id, especialidad.especialidad AS dato FROM policlinica_especialidad INNER JOIN especialidad ON policlinica_especialidad. id_especialidad = especialidad.id WHERE policlinica_especialidad.id_policlinica = '$id_policlinica'";
        break;

        case 2:
            $query = "SELECT id, nombre AS dato FROM doctor WHERE id_especialidad = '$id_especialidad' AND id_policlinica = '$id_policlinica'";
        break;

        case 3:
            $query = "SELECT id, fecha AS dato FROM horario WHERE id_doctor = '$id_doctor'";
        break;

        case 4:
            $query = "SELECT id_hora AS id, hora AS dato FROM horas WHERE id_horario = '$id_fecha'";
        break;

        default:
            echo 'Ocurrio un error en el sistema';
        break;
    }

    $resultado = mysqli_query($connection, $query);
    $html = "<option value=''>Seleccione una opcion</option>";
    echo $html;
    while ($row = mysqli_fetch_assoc($resultado)){
        $html = "<option value='".$row['id']."'>".$row['dato']."</option>"; 
        echo $html;
    }

    mysqli_close($connection);

?>