

          </div>
          <div class="table-data">
				<div class="order">
					<div class="head">
          <h1 class="h2">Usuarios</h1>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
              <tr>
                  <th scope="col"><input type="text" hidden=""></th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Acciones</th>
                </tr>
							</tr>
						</thead>
						<tbody>
            <?php 
            $sql = "SELECT * FROM users AS us JOIN info_user AS inf ON us.user_id = inf.user_id JOIN roles AS rol ON us.role_id = rol.role_id";   
            $view = $obj->mostrarDatos($sql);
            
            foreach ($view as $row){?>
                    <tr>
                    <td><input type="text" hidden="" value="<?php echo $row['user_id'] ?>" name="id"/>  </td>
                    <td><?php echo $row['name_us'];?></td>
                    <td><?php echo $row['user_lastname'];?></td>
                    <td><?php echo $row['user_email'];?></td>
                    <td><?php echo $row['role_name'];?>
                    </td>
                    <td>
                        <form id="estadoForm<?php echo $row['user_id']?>" action="../functions/process_status_user.php" method="POST" >
                          <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
                          <input class="switch "type="checkbox" id="estadoCheckbox<?php echo $row['user_id']?>" name="status" <?php echo ($row['status_user'] == 'activo')?'checked': ''; ?> >
                        </form>
                    </td>
                  <script>
                      document.getElementById('estadoCheckbox<?php echo $row['user_id'];?>').addEventListener('click', function(){
                      document.getElementById('estadoForm<?php echo $row['user_id']; ?>').submit();  
                      this.disable = true;
                    });
                  </script>
                    <td><a href="../class/eliminar.php?id=<?php echo $row['user_id']?>" 
                  name="eliminar"
                  value='borrar'><img src="../assets/img/icons8-delete-100.png" alt=""> </a>
                  
                <a href="editar.php?id=<?php echo $row['user_id']?>" 
                  name="editar"
                  value='actualizar'> <img src="../assets/img/icons8-actualizar-16.png" alt=""> </a></td>
                    </tr>
                    <?php }?>
						</tbody>
					</table>
				</div>
    </div>
