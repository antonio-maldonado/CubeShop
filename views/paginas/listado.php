<?php
$_SESSION["num"]=$num;
$_SESSION["tipo"]=$tipo;
$_SESSION["buscar"]=$buscar;
?>

<section class="listado" id="listado">
    
    <div class="listado__box">
       
        <?php for($i=($pagina-1)*$num;$i<=min(($num*$pagina)-1,count($productos)-1);$i++){?>
            
            <a href="/cube/public/index.php/producto?id=<?=$productos[$i]->id?>">
                <div class="listado__item">
                    
                    <div class="listado__img">
                        <figure>
                            <img loading="lazy" src="/cube/public/imagenes/<?=$productos[$i]->imagen?>" alt="">
                        </figure>
                    </div> 
                    <span class="titulo"><?=$productos[$i]->nombreProducto?></span>
                    
                    <div class="precio"><span><?=$productos[$i]->precio?></span></div>   
                    
                </div>
            </a>
        <?php }?>
    </div>
</section>


<div class="paginas" id="p1" >
    <div class="pa" id="pp">
    <?php 

    for($i=1;$i<=$numPaginas;$i++){ 
        if($pagina==$i ){
            $sel="select";
        }else{
            $sel="";
        }
            ?>
            <a class="<?=$sel?> next"  href="productos?pagina=<?=$i?>"><?=$i?></a>
        <?php }?>
        </div>
    </div>
