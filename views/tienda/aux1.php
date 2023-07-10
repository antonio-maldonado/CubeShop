<?php
// namespace Controllers;
// include __DIR__."/../includes/app.php"; 

// use Controllers\UserController;
// use Controllers\LoginController;
// use Controllers\TiendaController;
// use Controllers\PaginasController;
// use MVC\Router;
// $router=new Router();
// use Model\Producto;
    
//     $router=new Router();
// echo "<br><br>";
    // var_dump($_POST["buscar"]);
    
    // session_start();
    $_SESSION["str"]=$_POST["buscar"] ?? "";
    $src=$_SESSION["src"]??"";
    // 
    // var_dump( "".$src);
    //  $productos=Producto::list($_POST["buscar"]??"","");
    // $router->render("paginas/productos",[
    //     "productos"=>$productos
    //     ]);
    // header("Location: /cube/public/index.php/productos");
    // $sr1=;
    // $au=$_POST["buscar"]??"";
    // $router->get("/productos",[PaginasController::class,"productos"]);
        // include "paginas/productos.php"
?>



<section class="listado" id="listado">
    
    <div class="listado__box">
        
        <?php foreach($productos as $producto){ ?>
            
            <a href="/cube/public/index.php/producto?id=<?=$producto->id?>">
                <div class="listado__item">
                    
                    <div class="listado__img">
                        <figure>
                            <img loading="lazy" src="/cube/public/imagenes/<?=$producto->imagen?>" alt="">
                        </figure>
                    </div> 
                    <span class="titulo"><?=$producto->nombreProducto?></span>
                    
                    <div class="precio"><span><?=$producto->precio?></span></div>   
                    
                </div>
            </a>
        <?php }?>
    </div>
</section>