<?php

require_once ('../autoload.php');

$id = $_POST['user_id'];
$new_status = ($_POST['status']=='on' || $_POST['status']== '1') ? 'activo' : 'inactivo';

$sql= "UPDATE users SET status_user = '$new_status' WHERE user_id = '$id'";

$con = $conn->conexion($sql);
mysqli_query($con,$sql);

header("Location:../admin/users.php");
exit();

?>