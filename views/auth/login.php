
<main class="login">
    <h1>Iniciar Sesión</h1>
    
    <form action="#" method="POST" class="login__formulario" >
    <?php foreach($errores as $error){?>

    <div class="alerta error">
        <?=$error?>
    </div>
    <?php }?>
        <div class="login__campo">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" >
        </div>
        <div class="login__campo">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
        </div>

        <p>¿No tienes cuenta? <a href="/cube/public/index.php/signup"> Crear cuenta</a></p>
        <div class="boton-container">
            <input type="submit" class="boton-enviar" value="Iniciar Sesión">
        </div>
    </form>
</main>