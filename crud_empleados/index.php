<?php
include("conexion.php");
include("includes/header.php");
?>
<div class="container p-4">
    <div class="row">
        <div class="col-md4">
        <?php
            // if(isset($_SESSION['message'])){   ?>
           
            <!-- <div class="alert alert-<?php //$_SESSION['message_color']; ?> alert-dismissible fade show" role="alert"> -->
                <?php
                   // $_SESSION['message'];
                ?>
                <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div> -->

            <?php   //session_unset();
        
             //} ?>
           <div class="card card-body">
                <form action="includes/guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="p_nombre" class="form-control" placeholder="Primer nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="s_nombre" class="form-control" placeholder="Segundo nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p_apellido" class="form-control" placeholder="Primer apellido" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="s_apellido" class="form-control" placeholder="Segundo apellido" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" class="form-control" placeholder="Telefono" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="estado_civil" class="form-control" placeholder="Estado civil" autofocus>
                    </div>
                    <input type="submit" id="btn_guardar" class="btn btn-success btn-block" name="guardar_empleado" value="Guardar">
                </form>
            </div>    
        </div>
        <div class="col-m8">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>1° Nombre</th>
                        <th>2° Nombre</th>
                        <th>1° Apellido</th>
                        <th>2° Apellido</th>
                        <th>Telefono</th>
                        <th>Estado Civil</th>
                        <th>Acciones</th>                 
                    <tr>
                    <tbody>
                    <?php
                    $query="select * from empleados";
                    $resultado=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($resultado)){    ?>
                    <tr>
                        <td><?php echo $row['primer_nombre']?></td>
                        <td><?php echo $row['segundo_nombre']?></td>
                        <td><?php echo $row['primer_apellido']?></td>
                        <td><?php echo $row['segundo_apellido']?></td>
                        <td><?php echo $row['telefono']?></td>
                        <td><?php echo $row['estado_civil']?></td>
                        <td>
                            <a href="includes/actualizar.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-primary">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </a>
                        
                            <a href="includes/eliminar.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-danger">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg></a>
                        </td>
                    </tr>

                    <?php }   ?>
                    <tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
<?php
include("includes/footer.php")
?>

   