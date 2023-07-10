<div class="formulario">

    <form enctype="multipart/form-data" method="POST">

        <div class="input">
            <label for="nombre">Nombre del producto:</label>
            <input type="text" name="producto[nombreProducto]" id="nombre" value="<?=s($producto->nombreProducto)?>" placeholder="Nombre del producto">
        </div>
        
        <div class="input">
            <label for="precio">Precio:</label>
            <input type="number" name="producto[precio]" step="0.01" id="precio" value="<?=s($producto->precio)?>" placeholder="16.99">
        </div>

        <div class="input">
            <label for="descripcion">Descripción:</label>
            <textarea name="producto[descripcion]" id="descripcion" cols="30" rows="10"><?=s($producto->descripcion)?></textarea>
        </div>

        <div class="input">
            <label for="imagen">Imagen:</label>
            <input type="file" name="producto[imagen]" id="imagen" accept="image/jpeg, image/png, image/webp" placeholder="">
            <?php if($producto->imagen){?>
                <img src="/cube/public/imagenes/<?=$producto->imagen?>" alt="" class="imagen-small" name="producto[imagen]">
            <?php }?>
        </div>

        <div class="input">
            <label for="tipo">Tipo:</label>
            <select name="producto[tipo]" id="tipo" value="" selected>
                <option value="">--Seleccione--</option>
                <option value="2x2" <?php echo $producto->tipo==="2x2" ? "selected" :" "; ?>>2x2</option>
                <option value="3x3" <?php echo $producto->tipo==="3x3" ? "selected" :" "; ?>>3x3</option>
                <option value="4x4" <?php echo $producto->tipo==="4x4" ? "selected" :" "; ?>>4x4</option>
                <option value="5x5" <?php echo $producto->tipo==="5x5" ? "selected" :" "; ?>>5x5</option>
                <option value="6x6" <?php echo $producto->tipo==="6x6" ? "selected" :" "; ?>>6x6</option>
                <option value="7x7" <?php echo $producto->tipo==="7x7" ? "selected" :" "; ?>>7x7</option>
                <option value="Megaminx" <?php echo $producto->tipo==="Megaminx" ? "selected" :" "; ?>>Megaminx</option>
                <option value="Pyraminx" <?php echo $producto->tipo==="Pyraminx" ? "selected" :" "; ?>>Pyraminx</option>
                <option value="Square-1" <?php echo $producto->tipo==="Square-1" ? "selected" :" "; ?>>Square-1</option>
                <option value="Skewb" <?php echo $producto->tipo==="Skewb" ? "selected" :" "; ?>>Skewb</option>
                <option value="Timer" <?php echo $producto->tipo==="Timer" ? "selected" :" "; ?>>Timer</option>
                <!-- <option value="" <?php // echo $producto->tipo==="" ? "selected" :" "; ?>></option> -->
            <option value="Lubricante" <?php echo $producto->tipo==="Lubricante" ? "selected" :" "; ?>>Lubricante</option>
            </select>
            
        </div>

        <div class="input">
            <label for="version">Version:</label>
            <input type="text" name="producto[version]" id="version" value="<?=s($producto->version)?>" placeholder="Escribe la versión del cubo">
        </div>

        <div class="input">
            <label for="pBrand">Marca:</label>
            <input type="text" name="producto[pBrand]" id="pBrand" value="<?=s($producto->pBrand)?>" placeholder="Escribe el nombre de la marca">
        </div>

        <div class="input">
            <label for="pMagnets">Imanes:</label>
            <input type="text" name="producto[pMagnets]" id="pMagnets" value="<?=s($producto->pMagnets)?>" placeholder="Escribe el tipo de imán">
        </div>

        <div class="input">
            <label for="pSize">Tamaño:</label>
            <input type="number" name="producto[pSize]" id="pSize" value="<?=s($producto->pSize)?>" placeholder="Escribe el tamaño en mm">
        </div>

        <div class="input">
            <label for="pWeight">Peso:</label>
            <input type="number" name="producto[pWeight]" id="pWeight" value="<?=s($producto->pWeight)?>" placeholder="Escribe el peso en gramos">
        </div>

        <div class="input">
            <label for="pReleased">Fecha de lanzamiento:</label>
            <input type="date" name="producto[pReleased]" id="pReleased" value="<?=s($producto->pReleased)?>" >
        </div>

        <div class="input">
            <label for="numAvailable">Stock disponible:</label>
            <input type="number" name="producto[numAvailable]" id="numAvailable" value="<?=s($producto->numAvailable)?>" placeholder="Escribe el número de stock disponible">
        </div>

        
            

