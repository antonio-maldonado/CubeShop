<?php
 
    namespace Controllers;
    use MVC\Router;
    use Model\Producto;

    class PaginasController{
        public static $n=9;
        public $flag=false;

        public static function index(Router $router){
            $productos=Producto::get(6);

            $router->render("paginas/index",[
                "productos"=>$productos
            ]);
        }

        public static function productos(Router $router){
          
            $buscar=$_POST["buscar"]??"";
            $tipo=$_POST["tipo"]??"";
            // var_dump($_POST["buscar"]??"");
            $productos=Producto::all();
            $pagina=$_GET["pagina"]??1;
         
            // $num1=$_POST["paginas"]??9;
            if($_SERVER["REQUEST_METHOD"]=="POST"){   
                // var_dump($_POST["pagina"]);
                $pagina=$_POST["pagina"]??1;
                
                if($_POST["paginas"]){
                    $num1=$_POST["paginas"];
                  
                    self::$n=$num1;
                    // var_dump($num1);
                }
                $productos=Producto::list($_POST["buscar"]??"",$_POST["tipo"]??"");
                $numPaginas=ceil(count($productos)/self::$n);
                if($pagina<1||$pagina>$numPaginas){
                    $pagina=1;
                }
                $e=self::$n;
    
                    $router->render2("paginas/listado",[
                        "productos"=>$productos,
                        "num"=>self::$n,
                        "pagina"=>$pagina,
                        "numPaginas"=>$numPaginas,
                        "buscar"=>$buscar,
                        "tipo"=>$tipo
                        ]);
                        // $_GET["num"]=$e;
                        // include __DIR__."/../views/paginas/listado.php";
         
            }else{
                $numPaginas=ceil(count($productos)/(self::$n));
                if($pagina<1||$pagina>$numPaginas){
                    $pagina=1;
                }
                // include __DIR__."/../views/paginas/productos.php";
                $router->render("paginas/productos",[
                    "productos"=>$productos,
                    "num"=>self::$n,
                    "pagina"=>$pagina,
                    "numPaginas"=>$numPaginas,
                    "buscar"=>$buscar,
                    "tipo"=>$tipo
                    ]);
           
            }    
           
            $flag=true;
        }

        public static function producto(Router $router){
            
            $id=validarORedireccionar("/producto");
            $producto=Producto::find($id);
            $router->render("paginas/producto",[
                "producto"=>$producto
                ]);
        }

        public static function iniciarSesion(Router $router){
            
        }

        public static function nosotros(Router $router){
           
            $router->render("paginas/nosotros",[
                
            ]);
        }

        public static function contacto(Router $router){
            
        }
        
    }

?>