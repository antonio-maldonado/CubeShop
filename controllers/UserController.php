<?php


    namespace Controllers;

    use MVC\Router;
    use Model\Admin;
    
    class UserController {
        public static function signup(Router $router){
            $errores=[];
            
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $user= new Admin($_POST);
                $errores=$user->validar();
                if(empty($errores)){
                    $resultado=$user->existeUsuario();
                    if(!$resultado){
                        $errores=Admin::getErrores();
                    
                        $user->crearUsuario();
                    }else{
                        $errores[]="Existe usuario";
                    }
                }
            }
            $router->render("auth/signup",[
                "errores"=>$errores
            ]);
        }

        public static function getErrores(){

        }
    }
?>