<?php
    namespace Model;

    class Compra extends ActiveRecord{
        protected static $tabla="propiedades";
        protected static $columnasDB=["id","productos","idUsuario","fecha","hora"];

        public $id;
        public $productos;
        public $idUsuario;
        public $fecha;
        public $hora;

        public function __construct($args=[]){
            $this->id=$args['id']??null;
            $this->productos=$args['productos']??"";
            $this->idUsuario=$args['idUsuario']??"";
            $this->fecha=$args['fecha']??"";
            $this->hora=$args['hora']??"";

        }

        public function validar(){
            

            return self::$errores;
        }


    }

?>