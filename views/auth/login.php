


<h1 class="nombre-pagina">Login </h1>
<p class="descripcion-pagina "> Inicia sesion con tus datos</p></pclas>

<form class="formulario" method="post" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input 
               type="email" 
               id="email" 
               placeholder="Tu Email" 
               name="email" 
        />
    </div>
    <div class="campo">
        <label for= "password">Password</label>
        <input 
               type="password"  
               id="password"  
               placeholder="Tu Password"  
               name="password"  
               />
               </div>
               <input type="submit" class="boton" value="Iniciar Sesion">
</form>
    <div class="acciones">
        <a href="/crear-cuenta">¿Aun no tienes una cuenta ? Crea una </a>
        <a href="/olvide">¿No recuerdas tu password?</a>
    </div>