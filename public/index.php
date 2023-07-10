
<?php require __DIR__."/../includes/app.php"; 

    // include __DIR__."/../includes/aux1.php";
    use MVC\Router;
    use Controllers\UserController;
    use Controllers\LoginController;
    use Controllers\TiendaController;
    use Controllers\PaginasController;
    use Model\Producto;
    $router=new Router();

    $router->get("/admin",[TiendaController::class,"index"]);
    $router->get("/tienda/crear",[TiendaController::class,"crear"]);
    $router->post("/tienda/crear",[TiendaController::class,"crear"]);
    $router->get("/tienda/actualizar",[TiendaController::class,"actualizar"]);
    $router->post("/tienda/actualizar",[TiendaController::class,"actualizar"]);
    $router->post("/tienda/eliminar",[TiendaController::class,"eliminar"]);
    $router->get("/",[PaginasController::class,"index"]);
    $router->post("/productos",[PaginasController::class,"productos"]);
    $router->get("/productos",[PaginasController::class,"productos"]);
    $router->post("/listado2",[PaginasController::class,"productos"]);
    $router->get("/listado2",[PaginasController::class,"productos"]);
    $router->post("/listado",[PaginasController::class,"productos"]);
    $router->get("/listado",[PaginasController::class,"productos"]);
    $router->get("/producto",[PaginasController::class,"producto"]);
    $router->get("/login",[LoginController::class,"login"]);
    $router->post("/login",[LoginController::class,"login"]);
    $router->get("/logout",[LoginController::class,"logout"]);
    $router->get("/nosotros",[PaginasController::class,"nosotros"]);
    // $router->post("/contacto",[PaginasController::class,"contacto"]);
    $router->get("/signup",[UserController::class,"signup"]);
    $router->post("/signup",[UserController::class,"signup"]);
    $router->comprobarRutas();

?>


</body>
</html>