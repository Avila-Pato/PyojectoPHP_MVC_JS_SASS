<h1 class="nombre-pagina">Creando cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<form class="formulario" method="post" action="/crear-cuenta">

<div class="campo">
    <label for="nombre">Nombre</label>
    <input 
    type="text" 
    name="nombre" 
    id="nombre" 
    placeholder="Tu Nombre"
    />
</div>
<div class="campo">
    <label for="apellido">Apellido</label>
    <input 
    type="apellido" 
    name="apellido" 
    id="apellido"  
    placeholder="Tu Apellido"
    />
</div>
<div class="campo">
    <label for="telefono">Telefono</label>
    <input 
    type="telefono" 
    name="telefono" 
    id="telefono"  
    placeholder="Tu Telefono"
    />
</div>
<div class="campo">
    <label for="email">E-mail</label>
    <input 
    type="email" 
    name="email" 
    id="email"  
    placeholder="Tu E-mail"
    />
</div>
<div class="campo">
    <label for="password">Password</label>
    <input 
    type="password" 
    name="password" 
    id="password"  
    placeholder="Tu Password"
    />
</div>

<input type="submit" value="Crear Cuenta " class="boton"/>


</form> 

<div class="acciones">
        <a href="/">¿Ya tienes una cuenta ? Inicia Sesión.</a>
        <a href="/olvide">¿No recuerdas tu password?</a>
    </div>