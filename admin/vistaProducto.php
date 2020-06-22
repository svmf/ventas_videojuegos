<?php
include_once 'DAOProducto.php';
$prod = new Producto();
$dao = new DAOProducto();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="sweetalert/sweetalert2.css">
    <link rel=”stylesheet” type=”text/css” href=”estilos.css”>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="sweetalert/sweetalert2.js"></script>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/jquery.js"></script>
    

    
    <script>
    function cargar(cat,idprod,nombre,descrip,imagen,precio,stock){
        document.formulario.txtIdCategoria.value=cat;
        document.formulario.txtIdProducto.value=idprod;
        document.formulario.txtNomProd.value=nombre;
        document.formulario.txtDescripcion.value=descrip;
        document.formulario.txtImagen.value=imagen;
        document.formulario.txtPrecio.value=precio;
        document.formulario.txtStock.value=stock;
    }
   
    </script>
     
    </head>
<body>
    
    <div align="center">
        <h2 class="text-primary font-weight-bold">Control de Productos</h2><hr>
        <div class="form-group" style="position: relative; margin: auto; width: 500px;">
            <form method="POST" action="#" name="formulario">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-key' style='font-size:16px;'></i></span>
                    <select name="txtIdCategoria" value="" placeholder="ID Categoria" class="form-control"/><br>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    </select>
                </div>
                
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-key' style='font-size:16px;'></i></span>
                    <input type="text" name="txtIdProducto" value= "" size="30"  placeholder= "Id Video Juego" class="form-control" readonly><br>
                </div>
                
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-user-circle' style='font-size:16px;'></i></span>
                    <input type="text" name="txtNomProd" value="" size="30" placeholder="Nombre Video Juego" class="form-control"/><br>
                </div>
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-user-circle' style='font-size:16px;'></i></span>
                    <input type="textarea" name="txtDescripcion" value=""  placeholder="Descripcion" class="form-control"/><br>
                </div>
                
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-upload' style='font-size:12px;'></i></span>
                    <input type="file" name="txtImagen" value="" size="30" placeholder="Imagen" class="form-control"/><br>
                </div>

                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-money-bill-wave' style='font-size:12px;'></i></span>
                    <input type="number" name="txtPrecio" value="" size="30" placeholder="Precio" class="form-control"/><br>
                </div>

                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-hashtag' style='font-size:12px;'></i></span>
                    <input type="number" name="txtStock" value="" size="30" placeholder="Stock" class="form-control"/><br>
                </div>
                    
                <br>
                <input type="submit" value="Insertar" name="btnGuardar" class="btn btn-primary btn-md" />
                <input type="submit" value="Eliminar" name="btnEliminar" class="btn btn-danger btn-md" />
                <input type="submit" value="Modificar" name="btnModificar" class="btn btn-success btn-md" />
            </form> 
        </div>
    </div>
    <br><br>
    
    
    
    
    <div align="center" style="position: relative; margin: auto; width: 800px;">    
        <?php
        if(isset($_REQUEST["btnGuardar"])){
            $prod->setIdCategoria($_REQUEST["txtIdCategoria"]);
            $prod->setIdProducto($_REQUEST["txtIdProducto"]);
            $prod->setNombreProducto($_REQUEST["txtNomProd"]);
            $prod->setDescripcion($_REQUEST["txtDescripcion"]);
            $prod->setImagen($_REQUEST["txtImagen"]);
            $prod->setPrecio($_REQUEST["txtPrecio"]);
            $prod->setStock($_REQUEST["txtStock"]);
            $dao->insertar($prod);
            echo $dao->getTabla();
            
        }elseif(isset($_REQUEST["btnEliminar"])){
            $IdProducto = $_REQUEST["txtIdProducto"];
            $dao->eliminar($IdProducto);
            echo $dao->getTabla();
            
        }elseif(isset($_REQUEST["btnModificar"])){
            $prod->setIdCategoria($_REQUEST["txtIdCategoria"]);
            $prod->setIdProducto($_REQUEST["txtIdProducto"]);
            $prod->setNombreProducto($_REQUEST["txtNomProd"]);
            $prod->setDescripcion($_REQUEST["txtDescripcion"]);
            $prod->setImagen($_REQUEST["txtImagen"]);
            $prod->setPrecio($_REQUEST["txtPrecio"]);
            $prod->setStock($_REQUEST["txtStock"]);
            $dao->modificar($IdProducto);
            echo $dao->getTabla();
        }else{
            echo $dao->getTabla();
        }
        
        ?>
    </div>

</body>
</html>