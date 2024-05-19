<?php
  include "../class/Conexion.php";
  $con = new Conexion();
  $id= $_GET['id'];
  $sql = "SELECT * FROM users AS us JOIN info_user AS inf ON us.user_id = inf.user_id JOIN roles AS rol ON us.role_id = rol.role_id WHERE us.user_id = $id ";
  $con = $conn->conectar();
  $result= mysqli_query($con,$sql);
  $data= mysqli_fetch_row($result); 
?>


<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css"
    />

</head>
  <body>

    <div class="container">
      <!-- APPLICATION -->
      <div id="App" class="row pt-5">
        <!-- FORM -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h4>Agregar usuarios</h4>
            </div>
            <form action="../class/actualizar.php" method="post" class="card-body">
             <input type="text" hidden="" value="<?php echo $id ?>" name="id"/>  
             <input type="text" hidden="" value="<?php echo $data[2] ?>" name="rol_id"/>        
              <div class="form-group">
                <input
                  type="text"
                  name="username"
                  placeholder="nombre de usuario"
                  class="form-control"
                  value="<?php echo $data[1]?>"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  name="name"
                  placeholder="nombre"
                  class="form-control"
                  value="<?php echo $data[9]?>"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  name="lastname"
                  placeholder="Apellido"
                  class="form-control"
                  value="<?php echo $data[10]?>"
                />
              </div>
              <div class="form-group">
                <input
                  type="password"
                  name="password"
                  placeholder="password"
                  class="form-control"
                  value="<?php echo $data[4]?>"
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  name="email"
                  placeholder="Correo electronico"
                  class="form-control"
                   value="<?php echo $data[3]?>"
                />
              </div>
              <div class="form-group">
              <select name="role_name" class="form-control">
                <option value=1>Administrador</option>
                <option value=2 >usuario</option>
            </select>
              </div>
              <input
                type="submit"
                value="actualizar"
                class="btn btn-primary btn-block"
              />
            </form>
          </div>
        </div>


        </div>
      </div>
    </div>


  </body>
</html>
