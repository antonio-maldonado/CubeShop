<?php

?>

<main class="contenedor">
    <h1>Actualizar Producto</h1>
    <?php foreach($errores as $error){?>

    <div class="alerta error">
        <?=$error?>
    </div>
    <?php }?>

    <div class="boton-div">
    <a href="/cube/public/index.php/admin" class="boton-azul form">Volver</a>
    </div>
    <?php include __DIR__."/formulario.php"; ?>
    <div class="boton-container">
            <input type="submit" class="boton-enviar" value="Actualizar">
     </div>
     </form>

     </div>
</main>