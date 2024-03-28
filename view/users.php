<?php
require_once ("../header.php");
require_once ("header.php");
require_once ("footer.php");
require_once ("../controller/view_users.php");

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Usuarios</h1>
</div>

<div>
    <div>
       <main>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                    <tr>
                    <td><?php echo $view['user_id'];?></td>
                    <td><?php echo $view['name_us'];?></td>
                    <td><?php echo $view['user_lastname'];?></td>
                    <td><?php echo $view['user_email'];?></td>
                    <td><?php echo $view['role_name'];?></td>
                    <td><?php echo $view['status_user'];?></td>
                    <td>
                        <input type="button" value="">
                        <input type="button" value="">
                    </td>
                    </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>