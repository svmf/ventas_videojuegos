<?php
include 'credenciales.php';
include 'Empleado.php';

class DAOEmpleado{
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
        $sql = "select * from Empleado;";
        $this->conectar();
        $res = $this->con->query($sql);
        $this->desconectar();
        //ahora crearemos una tabla con bootstrap
        //los enlaces a los css y js estarán en las respectivas vistas
        $tabla = "<table class='table'>"
                ."<thead class='thead-dark'>";
        
        $tabla.="<tr>"
                    . "<th>CODIGO</th>"
                    . "<th>NOMBRE</th>"
                    . "<th>APELLIDO</th>"
                    . "<th>EDAD</th>"
                    . "<th>SUELDO</th>"
                    . "<th>ACCION</th>"
                . "</tr></thead><tbody>";
        $var = "<button type='button' name='btnSelect' class='btn btn-info btn-xs'>Select</button>";
        while($fila = mysqli_fetch_assoc($res)){
          $tabla.="<tr>"
                        ."<td>".$fila["codigo"]."</td>"
                        ."<td>".$fila["nombre"]."</td>"
                        ."<td>".$fila["apellido"]."</td>"
                        ."<td>".$fila["edad"]."</td>"
                        ."<td> $".$fila["sueldo"]."</td>"
                        ."<td>"."<a href=\"javascript:cargar('".$fila["codigo"]."','".$fila["nombre"]."','".$fila["apellido"]."','".$fila["edad"]."','".$fila["sueldo"]."')\">". $var."</a></td>"
                  . "</tr>";  
        }
        $tabla.="</tbody></table>";
        $res->close();
        return $tabla;
    }
    public function insertar($obj){
        $emp = new Empleado();
        $emp = $obj;
        $sql="insert into Empleado value(".$emp->getCodigo().",'".$emp->getNombreEmpleado()."','".$emp->getApellido()."', ".$emp->getEdad().", ".$emp->getSueldo().")";
        $this->conectar();
        if($this->con->query($sql)){
            //aplicamos cuadros de mensaje sweetalert
            echo "<script>swal.fire({title:'Éxito',text:'El registro fue insertado satisfactoriamente',type:'success'});</script>";
        }else{
            echo "<script>swal.fire({title:'Error',text:'El registro no se pudo insertar',type:'error'});</script>";
        }
        $this->desconectar();
 
    }
    public function eliminar($codigo){
        $sql="delete from Empleado where codigo=$codigo";
        $this->conectar();
        if($this->con->query($sql)){
            //aplicamos cuadros de mensaje sweetalert
            echo "<script>swal.fire({title:'Éxito',text:'El registro fue eliminado satisfactoriamente',type:'success'});</script>";
        }else{
            echo "<script>swal.fire({title:'Error',text:'El registro no se pudo eliminar',type:'error'});</script>";
        }
        $this->desconectar();
 
    }
    public function modificar($codigo){
      $nombre       = ($_REQUEST["txtNombre"]);
      $apellido     = ($_REQUEST["txtApellido"]);
      $edad         = ($_REQUEST["txtEdad"]);
      $sueldo       = ($_REQUEST["txtSueldo"]);
        
        $sql="update  Empleado set nombre = '".$nombre."', apellido = '".$apellido."', edad = '".$edad ."', sueldo = '".$sueldo."' where codigo = '{$_REQUEST["txtCodigo"]}';";
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

