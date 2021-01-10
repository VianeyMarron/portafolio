<?php
include('../conexion.php');

if(isset($_POST['guardar_empleado'])){

    $p_nombre=$_POST["p_nombre"];
    $s_nombre=$_POST["s_nombre"];
    $p_apellido=$_POST["p_apellido"];
    $s_apellido=$_POST["s_apellido"];
    $telefono=$_POST["telefono"];
    $estado_civil=$_POST["estado_civil"];

    $insercion="INSERT INTO empleados (primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,telefono,estado_civil) VALUES ('$p_nombre','$s_nombre','$p_apellido','$s_apellido','$telefono','$estado_civil')";
    $resultado= mysqli_query($con,$insercion);
    if(!$resultado){
       die("Fallo de registro");
    }
    $_SESSION['message']= 'Registro guardado exitosamente';
    $_SESSION['message_color']= 'warning';

   header('Location: ../index.php');

}

?>