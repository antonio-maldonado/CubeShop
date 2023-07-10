<?php

    namespace Model;


    class Producto extends ActiveRecord{
        protected static $tabla="productos";
        protected static $columnasDB=["id","nombreProducto","precio","descripcion","tipo","version","pTipo","pBrand","pMagnets","pSize","pWeight","pReleased","numAvailable","imagen","productoscol"];


        public $id;
        public $nombreProducto;
        public $precio;
        public $descripcion;
        public $tipo;
        public $version;
        public $pTipo;
        public $pBrand;
        public $pMagnets;
        public $pSize;
        public $pWeight;
        public $pReleased;
        public $numAvailable;
        public $imagen;
        public $productoscol;

        public function __construct($args=[]){
            $this->id=$args['id']??null;
            $this->nombreProducto=$args['nombreProducto']??null;
            $this->precio=$args['precio']??null;
            $this->descripcion=$args['descripcion']??null;
            $this->tipo=$args['tipo']??null;
            $this->version=$args['version']??null;
            $this->pTipo=$args['pTipo']??null;
            $this->pBrand=$args['pBrand']??null;
            $this->pMagnets=$args['pMagnets']??null;
            $this->pSize=$args['pSize']??0;
            $this->pWeight=$args['pWeight']??0;
            $this->pReleased=$args['pReleased']??"2023-09-01";
            $this->numAvailable=$args['numAvailable']??0;
            $this->imagen=$args['imagen']??null;
            $this->productoscol=$args['productoscol']??null;
        }

        public function validar(){
            if(!$this->nombreProducto){
                self::$errores[]="Debes añadir un nombre al producto";
            }
            if(!$this->precio){
                self::$errores[]="El precio es Obligatorio";
            }

            if(!$this->imagen){
                self::$errores[]="La imagen es obligatoria";
            }

            if(strlen($this->descripcion)<50){
                self::$errores[]="La descripción debe menos de 500 caracteres";
            }
            return self::$errores;
        }


    }
?>