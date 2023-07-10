<section class="listado" id="listado">
    
    <div class="listado__box">
       
        <?php foreach ($productos as $producto) {?>
            
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