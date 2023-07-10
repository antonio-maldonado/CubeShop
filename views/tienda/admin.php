<?php

    // debuguear ($productos);
    ?>
   
    <section class="table-container">
        <div class="table">
            
            <?php
                if($resultado){
                    $mensaje=mostrarNotificacion(intval($resultado));
                    if($mensaje){?>
                        <p class="alerta exito"><?=s($mensaje)?></p>
                    <?php }
                }
            ?>
            <a href="/cube/public/index.php/tienda/crear" class="boton-azul">Nuevo Producto</a>
            <table class="table-productos">
                <thead>
                    <th>ID</th>
                    <th>Nombre Producto</th>
                <th>Imagen</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php foreach($productos as $producto){ ?>
                    <tr>
                        <td><?=$producto->id?></td>
                        <td><?=$producto->nombreProducto?></td>
                        <td><img src="/cube/public/imagenes/<?=$producto->imagen?>" class="imagen-tabla" alt="Imagen tabla"></td>
                        <td><?=$producto->tipo?></td>
                        <td>
                            <div class="botones-div">

                                <form action="/cube/public/index.php/tienda/eliminar?id=<?=$producto->id?>" method="POST" class="w-100">
                                    <input type="hidden" name="tipo" value="propiedad">
                                    <input type="hidden" name="id" value="<?= $producto->id?>">
                                    <input type="submit" class="boton-rojo-block" value="Eliminar">
                                </form>
                                <a href="/cube/public/index.php/tienda/actualizar?id=<?=$producto->id?>" class="boton-amarillo-block">Actualizar</a>
                            </div>
                        
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>