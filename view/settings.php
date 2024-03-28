<?php
require_once ("../header.php");
require_once ("header.php");
require_once ("footer.php");
require_once ("../controller/view_users.php");

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Perfil / Configuraciones</h1>
</div>

<main>
<div class="container-quest">
    <div class="forms-container">
        <div class="Preguntas-seguridad">
          <form action="../controller/register_quest.php" method="POST" class="answer-security-form">
            <div class="input-field">
              <label for="">Pregunta 1 </label>
              <select name="quest1" id="quest1">
                <option value="comida favorita" >¿Cual es tu comida favorita?</option>
                <option value="color favorito" >¿Cual es tu color favorito?</option>
                <option value="pelicula favorita" >¿Cual es tu pelicula favorita?</option>
                <option value="cancion favorita" >¿Cual es tu cancion favorita?</option>
            </select>
              
            </div>
            <div class="input-field">
              <label > Respuesta 1 </label>
              <input type="text" name="answer1" />
            </div>
            <div class="input-field">
              <label> Pregunta 2 </label>
            <select name="quest2" id="quest2">
                <option value="comida favorita" >¿Cual es tu comida favorita?</option>
                <option value="color favorito" >¿Cual es tu color favorito?</option>
                <option value="pelicula favorita" >¿Cual es tu pelicula favorita?</option>
                <option value="cancion favorita" >¿Cual es tu cancion favorita?</option>
            </select>
            <div class="input-field">
              <label for="">Respuesta 2</label>
              <input type="text" name="answer2" placeholder="Respuesta 2" />
            </div>
            <button type="submit" value="Guardar"> Guardar cambios</button>
          </form>
        </div>
    </div>
</div>

<div class="container-config">
  <div class="forms-container">
    <div class="profile-settings">
        <form action="#">
          <div class="input-field">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" placeholder="<?php echo $view['username']?>">
          </div>
          <div class="input-field">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" placeholder="<?php echo $view['name_us']?>">
          </div>
          <div class="input-field">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" placeholder="<?php echo $view['user_lastname']?>">
          </div>
          <div class="input-field">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="<?php echo $view['user_email']?>">
          </div>
          <div class="input-field">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Tu contraseña">
          </div>
           
            <button type="submit">Guardar cambios</button>
        </form>
     </div>
  </div>
</div>
</main>
