<?php
class Categoria{
    private $IdCategoria;
    private $NombreCategoria;
    private $Descripcion;

    
    
    public function Categoria(){
        $this->IdCategoria=0;
        $this->NombreProducto=0;
        //etc...     
       
    }
    //metodos get y set
    public function getIdCategoria(){
        return $this->IdCategoria;
    }
    public function setIdCategoria($cat){
        $this->categoria=$cat;
    }
    
    public function getNombreCategoria(){
        return $this->NombreCategoria;
    }
    public function setNombreCategoria($nomcat){
        $this->NombreCategoria=$nomcat;
    }
    
    public function getDescripcion(){
        return $this->Descripcion;
    }
    public function setDescripcion($descrip){
        $this->Descripcion=$descrip;
    }
   
}


?>
