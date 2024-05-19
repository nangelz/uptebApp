<?php
  include "../class/Conexion.php";
  $conn = new Conexion(); 
  $id=  $_SESSION['user_id'];
  $sql = "SELECT * FROM users AS us JOIN info_user AS inf ON us.user_id = inf.user_id JOIN roles AS rol ON us.role_id = rol.role_id WHERE us.user_id = $id ";
  $con = $conn->conectar();
  $result= mysqli_query($con,$sql);
  $data= mysqli_fetch_row($result); 
?>

<main>
			<div class="head-title">
				<div class="left">
					<h1>Configuraciones.</h1>
				</div>
			</div>
        
				<div class="todo">
        <div class="head">
						<h3>Datos de perfil</h3>
					</div>
          <form action="../class/actualizar.php" > 
          <div class="input-field">
          <input type="text" hidden="" value="<?php echo $id ?>" name="id"/> 
          </div>
					 <div class="input-field">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" placeholder="<?php echo $data[1];?>">
          </div>
          <div class="input-field">
            <label for="name">Nombre:</label>
            <input type="name" id="name" name="name" placeholder="<?php echo $data[9]?>">
          </div>
          <div class="input-field">
            <label for="lastname">Apellido:</label>
            <input type="text" id="lastname" name="lastname" placeholder="<?php echo $data[10]?>">
          </div>
          <div class="input-field">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="<?php echo $data[3]?>">
          </div>
          <div class="input-field">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Tu contraseña">
          </div>
          <button type="submit" value="Guardar"> Guardar cambios</button> 
      
        </form>
			</div>

		</main>
</section>
