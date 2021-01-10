<?php
include('../conexion.php');;

 $id=$_GET['id'];
 
 if(isset($id)){
    $query="SELECT * FROM empleados WHERE id_empleado=$id";
    $resultado=mysqli_query($con,$query);
    if (!empty($resultado) && mysqli_num_rows($resultado) >= 1) {
          $row=mysqli_fetch_array($resultado);
        $primer_nom=$row['primer_nombre'];
        $segundo_nom=$row['segundo_nombre'];
        $primer_ap=$row['primer_apellido'];
        $segundo_ap=$row['segundo_apellido'];
        $telefono=$row['telefono'];
        $estado=$row['estado_civil'];
    }
 }


if (isset($_POST['actualizar'])) {
    $id=$_GET['id'];
    $primer_nom=$_POST['primer_nombre'];
    $segundo_nom=$_POST['segundo_nombre'];
    $primer_ap=$_POST['primer_ap'];
    $segundo_ap=$_POST['segundo_ap'];
    $telefono=$_POST['telefono'];
    $estado=$_POST['estado'];

    $update="UPDATE empleados SET primer_nombre='$primer_nom', segundo_nombre='$segundo_nom', primer_apellido='$primer_ap', segundo_apellido='$segundo_ap', telefono='$telefono', estado_civil='$estado' WHERE id_empleado=$id";
    $resultado_update=mysqli_query($con,$update);

    header('Location:../index.php');
}

include("./header.php");
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">              
                <form action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="POST" >
                    <div class="form-group">
                        <input type="text" name="primer_nombre" value="<?php echo $primer_nom; ?>" class="form-control">          
                    </div>
                    <div class="form-group">
                        <input type="text" name="segundo_nombre" value="<?php echo $segundo_nom; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="primer_ap" value="<?php echo $primer_ap; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="segundo_ap" value="<?php echo $segundo_ap; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" value="<?php echo $telefono; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="estado" value="<?php echo $estado; ?>" class="form-control">
                    </div>
                    <div class="container">
                        <button name="actualizar" class="btn btn-success">Actualizar</button>
                        <a href="../index.php" class="btn btn-secondary ">Regresar
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("./footer.php");
?>