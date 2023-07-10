<?php

    namespace Model;
  
    class Admin extends ActiveRecord{
        protected static $tabla="usuarios";
        protected static $columnasDB=["id","nombre","email","password","userLevel"];

        public $id;
        public $nombre;
        public $email;
        public $password;
        public $userLevel;

        public function __construct($args=[]){
            $this->id=$args["id"]??null;
            $this->email=$args["email"]??"";
            $this->password=$args["password"]??"";
            
            $this->nombre=$args["nombre"]??"";
            $this->userLevel=0;
        }

        public function validar(){
            if(!$this->nombre){
                self::$errores[]="El Nombre es obligatorio";
            }
            if(!$this->email){
                self::$errores[]="El Email es obligatorio";
            }

            if(!$this->password){
                self::$errores[]="El Password es obligatorio";
            }

            
            return self::$errores;
        }

        public function validar2(){
          
            if(!$this->email){
                self::$errores[]="El Email es obligatorio";
            }

            if(!$this->password){
                self::$errores[]="El Password es obligatorio";
            }

            
            return self::$errores;
        }

        public function existeUsuario(){
            $query="SELECT * FROM ". self::$tabla." WHERE email='".$this->email."' LIMIT 1";
            $resultado=self::$db->query($query);

            if(!$resultado->num_rows){
                self::$errores[]="El usuario no existe";
                return;
            }
            return $resultado;


        }

        public function comprobarPassword($resultado){
            $usuario=$resultado->fetch_object();
            // debuguear($this->password."  ".$usuario->password);
            // debuguear($usuario);
            $autenticado=password_verify($this->password,$usuario->password);
            
            if(!$autenticado){
                self::$errores[]="El password es Incorrecto";
            }
            return $autenticado;

        }

        public function autenticar(){
            session_start();

            $_SESSION["usuario"]= $this->email;
            $_SESSION["login"]=true;
            $query="SELECT * FROM ". self::$tabla." WHERE email='".$this->email."' LIMIT 1";
            // $resultado=self::$db->query($query);
            // debuguear(static::consultarSQL($query));
            $resultado=array_shift(static::consultarSQL($query));

            $_SESSION["id"]=$resultado->id;

            if($resultado->userLevel==1){
                $_SESSION["admin"]=true;
                
            }else{
                $_SESSION["admin"]=false;
            }

            header("Location: /cube/public/index.php/");

        }

        public function crearUsuario(){
            $this->password=password_hash($this->password,PASSWORD_BCRYPT);
            $atributos=$this->sanitizarAtributos();
            $string=join(",",array_keys($atributos));
            $vals=join("','",array_values($atributos));
            $query="INSERT INTO ".static::$tabla. "(";
            $query.=$string;
            $query.=") VALUES ('";
            $query.="$vals')";
            // debuguear($query);
            $resultado=self::$db->query($query);
            // debuguear($query);
            if($resultado){
                header("Location: /cube/public/index.php/");
            }
        }
    }
?>