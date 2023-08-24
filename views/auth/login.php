<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sesión con tus Datos</p>

<?php require_once __DIR__ . '/../templates/alertas.php'; ?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input id="email" type="email" placeholder="Tu Email" name="email" value="<?php echo s($auth->email) ?>">
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input id="password" type="password" placeholder="Tu Password" name="password">
    </div>

    <input class="boton" type="submit" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear Una</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>