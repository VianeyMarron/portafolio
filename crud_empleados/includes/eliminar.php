<?php
include('../conexion.php');

$id=$_GET['id'];


if(isset($id)){
    
    $query="DELETE FROM empleados WHERE id_empleado = $id";
    $resultado=mysqli_query($con,$query);
    if (!$resultado) {
        die('Error de eliminación');
    }
    $_SESSION['message']="Registro Eliminado";
    $_SESSION['message_type']="danger";
    header('Location:../index.php');
}

?>
