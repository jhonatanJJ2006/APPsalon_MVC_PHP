<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una</p>

<?php include_once __DIR__ . "/../templates/alertas.php" ?>

<form class="formulario" action="/crear-cuenta" method="POST">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" placeholder="Tu nombre" name="nombre" value="<?php echo s($usuario->nombre) ?>">
    </div>

    <div class="campo">
        <label for="apellido">Apellido</label>
        <input id="apellido" type="text" placeholder="Tu apellido" name="apellido" value="<?php echo s($usuario->apellido) ?>">
    </div>

    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input id="telefono" type="tel" placeholder="Tu Teléfono" name="telefono" value="<?php echo s($usuario->telefono) ?>">
    </div>

    <div class="campo">
        <label for="email">Email</label>
        <input id="email" type="email" placeholder="Tu Email" name="email" value="<?php echo s($usuario->email) ?>">
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input id="password" type="password" placeholder="Tu Password" name="password">
    </div>

    <input class="boton" type="submit" value="Crear Cuenta">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>