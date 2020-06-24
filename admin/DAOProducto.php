<?php
include 'credenciales.php';
include 'Producto.php';

class DAOProducto{
    private  $con;
    
    public function __construct() {
        
    }
    public function conectar(){
        try {
            $this->con = new mysqli(SERVIDOR, USUARIO, CONTRA, BD)or die ("Error al conectar");
        } catch (Exception $exc){
            echo $exc->getTraceAsString();
        }
    }
    public function desconectar(){
        $this->con->close();
    }
    public function getTabla(){
        $sql = "select * from productov;";
        $this->conectar();
        $res = $this->con->query($sql);
        $this->desconectar();
        //ahora crearemos una tabla con bootstrap
        //los enlaces a los css y js estarán en las respectivas vistas
        $tabla = "<div class='container-fluid'>"
                ."<div class='row'>"
                ."<div class='col-xs-12'>"
                ."<table class='table table-bordered table-dark'>"
                ."<thead'>";
        
        $tabla.="<tr>"
                    . "<th>Id CATEGORIA</th>"
                    . "<th>Id PRODUCTO</th>"
                    . "<th>NOMBRE</th>"
                    . "<th>IMAGEN</th>"
                    . "<th>DESCRIPCIÓN</th>"
                    . "<th>PRECIO</th>"
                    . "<th>STOCK</th>"
                . "</tr></thead><tbody>";
        $var = "<button type='button' name='btnSelect' class='btn btn-info btn-xs'>Select</button>";
       
        while($fila = mysqli_fetch_assoc($res)){
          $tabla.="<tr>"
                        ."<td>".$fila["IdCategoria"]."</td>"
                        ."<td>".$fila["IdProducto"]."</td>"
                        ."<td>".$fila["NombreProducto"]."</td>"
                        ."<td>".$fila["Imagen"]."</td>"
                        ."<td>".$fila["Descripcion"]."</td>"
                        ."<td> $".$fila["Precio"]."</td>"
                        ."<td>".$fila["Stock"]."</td>"
                        ."<td>"."<a href=\"javascript:cargar('".$fila["IdCategoria"]."','".$fila["IdProducto"]."','".$fila["Descripcion"]."','".$fila["Imagen"]."','".$fila["NombreProducto"]."','".$fila["Precio"]."','".$fila["Stock"]."')\">". $var."</a></td>"
                  . "</tr>";  
        }
        $tabla.="</tbody></div></div></div></table>";
        $res->close();
        return $tabla;
    }
    public function insertar($obj){
        $prod = new Producto();
        $prod = $obj;
        $sql="insert into productov value(".$prod->getIdCategoria().",'".$prod->getIdProducto()."','".$prod->getDescripcion()."', ".$prod->getImagen().", ".$prod->getNombreProducto().", ".$prod->getPrecio().", ".$prod->getStock().")";
        $this->conectar();
        if($this->con->query($sql)){
            //aplicamos cuadros de mensaje sweetalert
            echo "<script>swal.fire({title:'Éxito',text:'El registro fue insertado satisfactoriamente',type:'success'});</script>";
        }else{
            echo "<script>swal.fire({title:'Error',text:'El registro no se pudo insertar',type:'error'});</script>";
        }
        $this->desconectar();
 
    }
    public function eliminar($IdProducto){
        $sql="delete from productov where IdProducto=$IdProducto";
        $this->conectar();
        if($this->con->query($sql)){
            //aplicamos cuadros de mensaje sweetalert
            echo "<script>swal.fire({title:'Éxito',text:'El registro fue eliminado satisfactoriamente',type:'success'});</script>";
        }else{
            echo "<script>swal.fire({title:'Error',text:'El registro no se pudo eliminar',type:'error'});</script>";
        }
        $this->desconectar();
 
    }
    public function modificar($IdProducto){
      $IdCategoria          = ($_REQUEST["txtIdCategoria"]);
      $NombreProducto       = ($_REQUEST["txtNomProd"]);
      $Imagen               = ($_REQUEST["txtImagen"]);
      $Descripcion          = ($_REQUEST["txtDescripcion"]);
      $Precio               = ($_REQUEST["txtPrecio"]);
      $Stock                = ($_REQUEST["txtStock"]);
        
        $sql="update  productov set IdCategoria = '".$IdCategoria."', NombreProducto  = '".$NombreProducto ."' ,Imagen = '".$Imagen ."', Descripcion = '".$Descripcion."',  Precio   = '".$Precio  ."', Stock  = '".$Stock ."' where codigo = '{$_REQUEST["txtIdProducto"]}';";
        $this->conectar();
        if($this->con->query($sql)){
            //aplicamos cuadros de mensaje sweetalert
            echo "<script>swal.fire({title:'Éxito',text:'El registro fue modificado satisfactoriamente',type:'success'});</script>";
        }else{
            echo "<script>swal.fire({title:'Error',text:'El registro no se pudo modificar',type:'error'});</script>";
        }
        $this->desconectar();
 
    }
         }
?>

