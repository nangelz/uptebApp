<?php 
    include "../../class/Auth.php";

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $rol = 2;
    $Auth = new Auth();

    if ($Auth->registrar($name,$lastname,$usuario, $email, $password,$rol)) {
        header("location:../../index.php");
    } else {
        echo "No se pudo registrar";
    }

?>