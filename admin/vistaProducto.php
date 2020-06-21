<?php
include './DAOEmpleado.php';
$emp = new Empleado();
$dao = new DAOEmpleado();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="sweetalert/sweetalert2.css">
    <link rel=”stylesheet” type=”text/css” href=”estilos.css”>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="sweetalert/sweetalert2.js"></script>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="shortcut icon" type="image/x-icon" href="Star_24682.ico" />
    <script src="js/jquery.js"></script>
    

    
    <script>
    function cargar(cod,nom,ape,ed,sue){
        document.formulario.txtCodigo.value=cod;
        document.formulario.txtNombre.value=nom;
        document.formulario.txtApellido.value=ape;
        document.formulario.txtEdad.value=ed;
        document.formulario.txtSueldo.value=sue;
    }
   
    </script>
     
    </head>
<body>
    
    <div align="center">
        <h2 class="text-primary font-weight-bold">Control de Empleados</h2><hr>
        <div class="form-group" style="position: relative; margin: auto; width: 500px;">
            <form method="POST" action="#" name="formulario">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-key' style='font-size:16px;'></i></span>
                    <input type="text" name="txtCodigo" value="" placeholder="Código" class="form-control"/><br>
                </div>
                
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-user-circle' style='font-size:16px;'></i></span>
                    <input type="text" name="txtNombre" value="" size="30" placeholder="Nombre del Empleado" class="form-control"/><br>
                </div>
                
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-user-circle' style='font-size:16px;'></i></span>
                    <input type="text" name="txtApellido" value="" size="30" placeholder="Apellido" class="form-control"/><br>
                </div>
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-user-circle' style='font-size:16px;'></i></span>
                    <input type="number" name="txtEdad" value="" size="30" placeholder="Edad" class="form-control"/><br>
                </div>
                
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-money-bill-wave' style='font-size:12px;'></i></span>
                    <input type="text" name="txtSueldo" value="" size="30" placeholder="Sueldo" class="form-control"/><br>
                </div>
                    
                <br>
                <input type="submit" value="Guardar" name="btnGuardar" class="btn btn-primary btn-md" />
                <input type="submit" value="Eliminar" name="btnEliminar" class="btn btn-danger btn-md" />
                <input type="submit" value="Modificar" name="btnModificar" class="btn btn-success btn-md" />
            </form> 
        </div>
    </div>
    <br><br>
    
    
    
    
    <div align="center" style="position: relative; margin: auto; width: 800px;">    
        <?php
        if(isset($_REQUEST["btnGuardar"])){
            $emp->setCodigo($_REQUEST["txtCodigo"]);
            $emp->setNombreEmpleado($_REQUEST["txtNombre"]);
            $emp->setApellido($_REQUEST["txtApellido"]);
            $emp->setEdad($_REQUEST["txtEdad"]);
            $emp->setSueldo($_REQUEST["txtSueldo"]);
            $dao->insertar($emp);
            echo $dao->getTabla();
            
        }elseif(isset($_REQUEST["btnEliminar"])){
            $codigo = $_REQUEST["txtCodigo"];
            $dao->eliminar($codigo);
            echo $dao->getTabla();
            
        }elseif(isset($_REQUEST["btnModificar"])){
            $codigo = ($_REQUEST["txtCodigo"]);
            $emp->setCodigo($_REQUEST["txtCodigo"]);
            $emp->setNombreEmpleado($_REQUEST["txtNombre"]);
            $emp->setApellido($_REQUEST["txtApellido"]);
            $emp->setEdad($_REQUEST["txtEdad"]);
            $emp->setSueldo($_REQUEST["txtSueldo"]);
            $dao->modificar($codigo);
            echo $dao->getTabla();
        }else{
            echo $dao->getTabla();
        }
        
        ?>
    </div>

<div class="panel panel-danger">
    <div class="panel-heading"><b> Integrantes </b></div>
    <div class="panel-body">Delmi Abigail Díaz<br>Silvia Verónica Murillo</div>
</div>

</body>
</html>