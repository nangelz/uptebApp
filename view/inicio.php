<?php session_start(); 
  if (!isset($_SESSION['username'])) {
    header("location:index.php");
  }elseif ($_SESSION['role_id']==1){

  require "header.php";
  echo '
  <div class="d-flex" id="wrapper">
  
  <!-- Sidebar -->
  <div class="bg-white" id="sidebar-wrapper">
      <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
              class="fas fa-user-secret me-2"></i>UPTEBAPP</div>
      <div class="list-group list-group-flush my-3">
          <a id="link" href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text"><i
                  class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
          <a id="link" href="grupos.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-project-diagram me-2"></i>Projects</a>
          <a id="link" href="users.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-chart-line me-2"></i>Usuarios</a>
          <a id="link" href="stast.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-paperclip me-2"></i>Estadisticas</a>
          <a id="link" href="database.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-shopping-cart me-2"></i>Database</a>
          <a href="../server/login/logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                  class="fas fa-power-off me-2"></i>Salir</a>
      </div>
  </div>';
  require "nav.php";
  require "page.php";
  require "footer.php";
  
  }elseif($_SESSION['role_id']==2){
    require "header.php";
  echo '
  <div class="d-flex" id="wrapper">
  
  <!-- Sidebar -->
  <div class="bg-white" id="sidebar-wrapper">
      <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
              class="fas fa-user-secret me-2"></i>UPTEBAPP</div>
      <div class="list-group list-group-flush my-3" id="link">
          <a id="link" href="iu.php" class="list-group-item list-group-item-action bg-transparent second-text"><i
                  class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
          <a id="link" href="grupos.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-project-diagram me-2"></i>Projects</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-chart-line me-2"></i>Analytics</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-paperclip me-2"></i>Reports</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-shopping-cart me-2"></i>Store Mng</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-gift me-2"></i>Products</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-comment-dots me-2"></i>Chat</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                  class="fas fa-map-marker-alt me-2"></i>Outlet</a>
          <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                  class="fas fa-power-off me-2"></i>Logout</a>
      </div>
  </div>';
  require "nav.php";
  require "page.php";
  require "footer.php";

  }else{
    echo 'ocurrio un error';
  }
?>
