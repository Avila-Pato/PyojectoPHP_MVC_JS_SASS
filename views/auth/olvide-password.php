<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina"> Reestablece tu password escribiendo tu email a continuacion..</p>

<form class="formulario" action="/olvide" method = "post"> 
<div class="campo">
    <label for="email">Email</label>
    <input 
    type="email" 
    name="email" 
    id="email" 
    placeholder="Tu Email"
    />
</div>
<input type="submit" value="Enviar Instrucciones" class="boton"/>
</form>


<div class="acciones">
        <a href="/">¿Ya tienes una cuenta ? Inicia Sesión.</a>
        <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una.</a>
    </div>