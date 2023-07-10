<?php

namespace Controllers;
use MVC\Router;
use Model\Producto;
use Intervention\Image\ImageManagerStatic as Image;

class TiendaController{
    public static function index(Router $router){
        $productos=Producto::all();

        $resultado=$_GET["resultado"]??null;
        $router->render("tienda/admin",[
            "productos"=>$productos,
            "resultado"=>$resultado
        ]);
    }

    public static function crear(Router $router){
        $producto= new Producto;
        $errores=Producto::getErrores();

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $producto = new Producto($_POST["producto"]);
                

            //Guardando la imagen
            $nombreImagen=md5(uniqid(rand(),true)).".jpg";
    
            
            if($_FILES['producto']['tmp_name']['imagen']){
                // $image=Image::make($_FILES['producto']['tmp_name']['imagen'])->fit(800,600);
                $image=Image::make($_FILES['producto']['tmp_name']['imagen']);
                $producto->setImagen($nombreImagen);
            }
    
            $errores=$producto->validar();
    
            if(empty($errores)){
                
                if(!is_dir(CARPETA_IMAGENES)){
                    mkdir(CARPETA_IMAGENES);
                }

                $image->save(CARPETA_IMAGENES.$nombreImagen);
                
                $producto->guardar();
    
            }
        }

        $router->render("tienda/crear",[
            "producto"=>$producto,
            "errores"=>$errores
        ]);
    }

    public static function actualizar(Router $router){
        
        $id=validarORedireccionar("/cube/public/index.php/admin");
        $producto= Producto::find($id);
        $errores=Producto::getErrores();

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $args=$_POST["producto"];

            $producto->sincronizar($args);

            $errores=$producto->validar();

            //Guardando la imagen
            $nombreImagen=md5(uniqid(rand(),true)).".jpg";
    
            
            if($_FILES['producto']['tmp_name']['imagen']){
                $image=Image::make($_FILES['producto']['tmp_name']['imagen']);
                $producto->setImagen($nombreImagen);
            }
    
    
            if(empty($errores)){
                
                if($_FILES['producto']['tmp_name']['imagen']){
                   
                    $image->save(CARPETA_IMAGENES.$nombreImagen);
                }
                
                $producto->guardar();
    
            }
        }
        $router->render("tienda/actualizar",[
            "producto"=>$producto,
            "errores"=>$errores,
            
        ]);
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD']==="POST"){
            $id=$_POST['id'];
            $id=filter_var($id,FILTER_VALIDATE_INT);
            
            if($id){
                $tipo=$_POST["tipo"];
    
                if(validarTipoContenido($tipo)){
                    $propiedad=Producto::find($id);
                    $propiedad->eliminar();
                }
            }
        }
    }
}
?>