<?php
include_once 'Categoria.php';

class Producto{
    private $IdCategoria;
    private $IdProducto;
    private $Descripcion;
    private $Imagen;
    private $NombreProducto;
    private $Precio;
    private $Stock;
    
    
    public function Producto(){
        $this->IdCategoria=0;
        $this->Idproducto=0;
        //etc...     
       
    }
    //metodos get y set
    public function getIdCategoria(){
        return $this->IdCategoria;
    }
    public function setIdCategoria($cat){
        $this->categoria=$cat;
    }
    
    public function getIdProducto(){
        return $this->IdProducto;
    }
    public function setIdProducto($idprod){
        $this->IdProducto=$idprod;
    }
    
    public function getDescripcion(){
        return $this->Descripcion;
    }
    public function setDescripcion($descrip){
        $this->Descripcion=$descrip;
    }
    
    public function getImagen(){
    return $this->Imagen;
    }
    public function setImagen($imagen){
        $this->Imagen=$imagen;
    }
    
    public function getNombreProducto(){
        return $this->NombreProducto;
        }
        public function setNombreProducto($nombre){
            $this->NombreProducto=$nombre;
        }

    public function getPrecio(){
    return $this->Precio;
    }
    public function setPrecio($precio){
        $this->Precio=$precio;
    }
    public function getStock(){
        return $this->Stock;
        }
        public function setStock($stock){
            $this->Stock=$stock;
        }
       
    
}



?>
