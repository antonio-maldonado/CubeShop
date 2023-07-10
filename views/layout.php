<?php 

    if(!isset($_SESSION)){
        session_start();
    }
    $admin=$_SESSION["admin"]??false;
    $auth=$_SESSION["login"]??false;

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/cube/public/build/css/app.css">
    <link rel="shortcut icon" href="/cube/public/build/img/fav-icon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
   <title>Cube Shop</title>
    
</head>
<body>

    <header class="header">
        <nav>
            <div class="header__img">
                <a href="/cube/public/index.php">
                    <img src="/cube/public/build/img/logo4.png"  alt="">
                </a>
            </div>    
            <div class="boton_list">
                <li id="ic1 aa"><i class="icc ic fa-solid fa-list"></i></li>
            </div>
            
            <div class="header__list">
                <ul>
                    
                    <li><a href="/cube/public/index.php">Inicio</a></li>
                    <li><a href="/cube/public/index.php/productos">Productos</a></li>
                    <li><a href="/cube/public/index.php/nosotros">Nosotros</a></li>
                    <?php 
                        if($admin==true) { ?>
                        <li><a href="/cube/public/index.php/admin">Admin</a></li>
                        <?php }?>
                    <?php if(!$auth){ ?>
                    <li><a href="/cube/public/index.php/login">Iniciar Sesión</a></li>
                    
                    <?php }else{?>
                        <li><a href="/cube/public/index.php/logout">Cerrar Sesión</a></li>
                        <?php } ?>
                        
                       
                </ul>
            </div>
        </nav>
        
    </header>

    <?= $contenido?>
    
    <footer class="footer">
        <div class="footer__contenedor">
            <div class="footer__icons">
                <p>Redes Sociales</p>
                <a href="#">
                    <i class="fa-brands fa-facebook"></i>
                    
                </a>
                <a href="#">
                    <i class="fa-brands fa-linkedin"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-youtube"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-tiktok"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-discord"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-reddit-alien"></i>
                </a>
            </div>
            <div class="footer__icons">
                <p>© 2009-2023 CubeShop, Inc.</p>
            </div>
        </div>
    </footer>
    
    <!-- <script src="/cube/public/build/js/bundle.min.js"></script> -->
    <script src="/cube/src/js/buscar.js"></script>
    <script src="/cube/src/js/list.js"></script>
    <script src="/cube/src/js/foto.js"></script>
    <script src="/cube/src/js/slider.js" ></script>
       
</body>
</html>