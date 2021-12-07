<?php 

    require '../Db/database.php';
    $seleccionador = $_GET['prueba'];
    $id_policlinica = $_POST['id_policlinica'];
    $id_especialidad = $_POST['id_especialidad'];

    if($seleccionador == 1){
        $queryP = "SELECT DISTINCT policlinica_especialidad.id_especialidad, especialidad.especialidad FROM policlinica_especialidad INNER JOIN especialidad ON policlinica_especialidad. id_especialidad = especialidad.id WHERE policlinica_especialidad.id_policlinica = '$id_policlinica'";
        $resultadoP = mysqli_query($connection, $queryP);

        $html = "<option value=''>Seleccione Policlinica</option>";

        while ($rowE = mysqli_fetch_assoc($resultadoP)){
        $html = "<option value='".$rowE['id_especialidad']."'>".$rowE['especialidad']."</option>"; 
        echo $html;
        }  
    }elseif($seleccionador == 2){

        $queryE = "SELECT id, nombre FROM doctor WHERE id_especialidad = '$id_especialidad' AND id_policlinica = '$id_policlinica'";
        $resultadoE = mysqli_query($connection, $queryE);

        $html = "<option value=''>Seleccione Policlinica</option>";

        while ($rowD = mysqli_fetch_assoc($resultadoE)){
        $html = "<option value='".$rowD['id']."'>".$rowD['nombre']."</option>"; 
        echo $html;
        }
    }
?>