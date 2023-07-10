<main class="signup">
    
    <h1>Crear cuenta</h1>
    
    <form action="" class="signup__formulario" method="POST">
    <?php foreach($errores as $error){?>

    <div class="alerta error">
        <?=$error?>
    </div>
<?php }?>
        <div class="login__campo">
            <label for="nombre">Nombre completo: </label>
            <input type="text" id="nombre" name="nombre" >
        </div>
        <div class="login__campo">
            <label for="email">Correo Electrónico: </label>
            <input type="email" id="email" name="email">
        </div>
        <div class="login__campo">
            <label for="password">Contraseña: </label>
            <input type="password" id="password" name="password">
        </div>
        
        <div class="boton-container">
            <input type="submit" class="boton-enviar" value="CREAR CUENTA">
        </div>
    </form>
</main>