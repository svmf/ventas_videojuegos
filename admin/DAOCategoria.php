<?php
include 'credenciales.php';
include 'Categoria.php';

class DAOCategoria{
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
        $sql = "select * from categoria;";
        $this->conectar();
        $res = $this->con->query($sql);
        $this->desconectar();
        //ahora crearemos una tabla con bootstrap
        //los enlaces a los css y js estarán en las respectivas vistas
        $tabla = "<table class='table table-responsive table-striped'>"
                ."<thead'>";
        
        $tabla.="<tr>"
                    . "<th>Id CATEGORIA</th>"
                    . "<th>NOMBRE</th>"
                    . "<th>DESCRIPCIÓN</th>"
                . "</tr></thead><tbody>";
        $var = "<button type='button' name='btnSelect' class='btn btn-info btn-xs'>Select</button>";
        while($fila = mysqli_fetch_assoc($res)){
          $tabla.="<tr>"
                        ."<td>".$fila["IdCategoria"]."</td>"
                        ."<td>".$fila["NombreCategoria"]."</td>"
                        ."<td>".$fila["Descripcion"]."</td>"
                        ."<td>"."<a href=\"javascript:cargar('".$fila["IdCategoria"]."','".$fila["NombreCategoria"]."','".$fila["Descripcion"]."')\">". $var."</a></td>"
                  . "</tr>";  
        }
        $tabla.="</tbody></table>";
        $res->close();
        return $tabla;
    }
    public function insertar($obj){
        $cat = new Categoria();
        $cat = $obj;
        $sql="insert into categoria value(".$cat->getIdCategoria().",'".$cat->getNombreCategoria()."','".$cat->getDescripcion()."')";
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
        $sql="delete from producto where IdProducto=$IdProducto";
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
      $IdProducto           = ($_REQUEST["txtProducto"]);
      $Descripcion          = ($_REQUEST["txtDescripcion"]);
      $Imagen               = ($_REQUEST["txtImagen"]);
      $NombreProducto       = ($_REQUEST["txtNomProd"]);
      $Precio               = ($_REQUEST["txtPrecio"]);
      $Stock                = ($_REQUEST["txtStock"]);
        
        $sql="update  producto set IdProducto = '".$IdProducto."', Descripcion = '".$Descripcion."', Imagen = '".$Imagen ."', NombreProducto  = '".$NombreProducto ."', Precio   = '".$Precio  ."', Stock  = '".$Stock ."' where codigo = '{$_REQUEST["txtIdProducto"]}';";
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

