<?php
    require_once("header.php");
    require_once("footer.php");
    
    ?>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="controller/verify.php" method="POST" class="sign-in-form">
          <h2 class="title">Iniciar sesion</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Nombre de Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Contraseña" />
            </div>
            <input type="submit" value="Iniciar sesion" class="btn solid" />
            <a class="social-text">¿Olvido su contraseña?</a>
      
          </form>
          <form action="controller/register_user.php" method="POST" class="sign-up-form">
          
            <h2 class="title">Registrar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombres" name="name"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Apellidos" name="lastname"/>
            </div> 
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre de Usuario" name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="password" />
            </div>
            <input type="submit" class="btn" value="Registrar" />
  
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿Eres nuevo?</h3>
            <p>
              ¡Bienvenido!, dejame guiarte en tus primeros pasos... Presiona el boton de abajo si deseas registrarte.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registro
            </button>
          </div>
          <img src="assets/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Deseas iniciar sesion?</h3>
            <p>
              Si ya tienes una cuenta no necesitas registrarte, así que presiona el boton de abajo para que puedas iniciar tu sesion.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Iniciar Sesion
            </button>
          </div>
          <img src="assets/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
<script src="assets/js/change.js"></script>