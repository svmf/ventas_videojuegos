<?php
class Empleado{
    private $codigo;
    private $nombre;
    private $apellido;
    private $edad;
    private $sueldo;
    
    
    public function Empleado(){
        $this->codigo=0;
        $this->nombre="";
        //etc...     
       
    }
    //metodos get y set
    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($cod){
        $this->codigo=$cod;
    }
    
    public function getNombreEmpleado(){
        return $this->nombre;
    }
    public function setNombreEmpleado($nom){
        $this->nombre=$nom;
    }
    
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($ape){
        $this->apellido=$ape;
    }
    
    public function getEdad(){
    return $this->edad;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }
    
    public function getSueldo(){
    return $this->sueldo;
    }
    public function setSueldo($sueldo){
        $this->sueldo=$sueldo;
    }
       
    
}



?>
