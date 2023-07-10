<?php
    namespace Model;

    class ActiveRecord{
        protected static $db;
        // protected static $columnasDB=["id","titulo","precio","imagen","descripcion","habitaciones","wc","estacionamiento","creado","vendedores_id"];

        protected static $columnasDB=["id","nombreProducto","precio","descripcion","tipo","version","pTipo","pBrand","pMagnets","pSize","pWeight","pReleased","numAvailable","imagen","productoscol"];
        protected static $tabla="";
        //Errores
        protected static $errores=[];

        
        public function guardar(){
            // debuguear($this->id);
            if(!is_null($this->id)){
                
                $this->actualizar();
            }else{
                $this->crear();
            }
        }

        public function actualizar(){
            
            $atributos=$this->sanitizarAtributos();
            
            $valores=[];
            foreach($atributos as $key=>$value){
                $valores[]="$key='$value'";
            }
            
            
            $query.="UPDATE ".static::$tabla." SET ";
            $query.=join(', ',$valores);
            $query.=" WHERE id = '".self::$db->escape_string($this->id)."' ";
            $query.=" LIMIT 1";

            $resultado=self::$db->query($query);

            if($resultado){
                header("Location: /cube/public/index.php/admin?resultado=2");
            }
            
        }

        public function eliminar(){
            $query="DELETE FROM ".static::$tabla." WHERE id=".self::$db->escape_string($this->id). " LIMIT 1";
            $resultado=self::$db->query($query);

            if($resultado){
                $this->borrarImagen();
                header("Location: /cube/public/index.php/admin?resultado=3");
            }
            
        }

        public function borrarImagen(){
            $existeArchivo=file_exists(CARPETA_IMAGENES.$this->imagen);
            if($existeArchivo){
                unlink(CARPETA_IMAGENES.$this->imagen);
            }   
        }

        public function crear(){
            $atributos=$this->sanitizarAtributos();
            $string=join(",",array_keys($atributos));
            $vals=join("','",array_values($atributos));
            $query="INSERT INTO ".static::$tabla. "(";
            $query.=$string;
            $query.=") VALUES ('";
            $query.="$vals')";
            // debuguear($query);
            $resultado=self::$db->query($query);

            if($resultado){
                header("Location: /cube/public/index.php/admin?resultado=1");
            }
         
        }

        public static function setDB($database){
            self::$db=conectarDB();
        }
        
        public function atributos(){
            $atributos=[];
            
            foreach(static::$columnasDB as $columna){
                if($columna==="id"){
                    continue;
                }
                $atributos[$columna]=$this->$columna;
            }
            return $atributos;
        }

        public function sanitizarAtributos(){
            $atributos=$this->atributos();
            $sanitizado=[];

            foreach($atributos as $key=>$value){
                $sanitizado[$key]=self::$db->escape_string($value ?? "");
            }

            return $sanitizado;
        }

        public function setImagen($imagen){
            if(!is_null($this->id)){
               $this->borrarImagen();
            }

            if($imagen){
                $this->imagen=$imagen;
            }
        }
        
        public static function getErrores(){
            return static::$errores;
        }

        public function validar(){
            static::$errores=[];

            return static::$errores;
        }

        public static function all(){
            $query="SELECT * FROM ".static::$tabla;

            $resultado=self::consultarSQL($query);
            return $resultado;
        }

        public static function list($str,$tipo){
            // $str=null;
            // $tipo=null;
         
            $query="SELECT * FROM ".static::$tabla;
            if(isset($str)&& !isset($tipo)){
               
                $query .= " WHERE nombreProducto LIKE '%$str%' OR descripcion LIKE '%$str%' OR pBrand LIKE '%$str%'";
            }else if(isset($tipo) && !isset($str)){
                $query .=  " WHERE LIKE '%$tipo%'";

            }else if(isset($str)&& isset($tipo)){
                $query .= " WHERE ((nombreProducto LIKE '%$str%' OR descripcion LIKE '%$str%' OR pBrand LIKE '%$str%') AND tipo LIKE '%$tipo%')";
            }
            

            $resultado=self::consultarSQL($query);
            return ($resultado);

            // $query="SELECT * FROM ".static::$tabla;

            // $resultado=self::consultarSQL($query);
            // return $resultado;
        }


        public static function get($cantidad){
            $query="SELECT * FROM ".static::$tabla." LIMIT ".$cantidad;

            $resultado=self::consultarSQL($query);
            return $resultado;
        }


        public static function find($id){
            $query="SELECT * FROM ".static::$tabla." WHERE id=$id";
            $resultado=self::consultarSQL($query);
            return array_shift($resultado);
        }

        public static function consultarSQL($query){
            $resultado=self::$db->query($query);
            
            $array=[];
            while($registro=$resultado->fetch_assoc()){
                $array[]=static::crearObjeto($registro);
            }

            $resultado->free();

            return $array;
        }

       
        protected static function crearObjeto($registro){
            $objeto=new static;

            foreach($registro as $key=>$value){
                if(property_exists($objeto,$key)){
                    $objeto->$key=$value;
                }
            }

            return $objeto;
        }

        public function sincronizar($args=[]){
            foreach($args as $key=>$value){
                if(property_exists($this,$key)&& !is_null($value)){
                    $this->$key=$value;
                }
            }
            
        }

    }


?>