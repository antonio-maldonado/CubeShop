<?php
    namespace MVC;

    class Router{
        public $rutasGET=[];
        public $rutasPOST=[];
        
        public function get($url,$fn){
            $this->rutasGET[$url]=$fn;
        }

        public function post($url,$fn){
            $this->rutasPOST[$url]=$fn;
        }

        public function comprobarRutas(){
            session_start();
            $auth=$_SESSION["admin"]??null;

            $rutas_protegidas=["/admin"];
            $urlActual=$_SERVER['PATH_INFO']??"/";
            $metodo=$_SERVER["REQUEST_METHOD"];

            if($metodo==="GET"){
                $fn=$this->rutasGET[$urlActual]??null;
            }else{
                $fn=$this->rutasPOST[$urlActual]??null;
                  
                
            }

            if(in_array($urlActual,$rutas_protegidas)&&$auth!=true){
                header("Location: /cube/public/index.php");
            }

            if($fn){
                
                call_user_func($fn,$this);
            }else{
                echo "Página no encontrada";
            }
        }
    
        public function render($view,$datos=[]){
            foreach($datos as $key=>$value){
                $$key=$value;
            }
            ob_start();

            include __DIR__."/views/$view.php";
            $contenido = ob_get_clean();

            include __DIR__."/views/layout.php";
        }

        public function render2($view,$datos=[]){
            foreach($datos as $key=>$value){
                $$key=$value;
            }
            ob_start();

            $contenido = ob_get_clean();
            include __DIR__."/views/$view.php";


        }
        public function render3($view,$datos=[]){
            foreach($datos as $key=>$value){
                $$key=$value;
            }
            ob_start();

            
            include __DIR__."/views/$view.php";
            include __DIR__."/views/layout.php";
            $contenido = ob_get_clean();
            include __DIR__."/views/$view.php";
            // include __DIR__."/views/$view.php";


        }
    }


?>