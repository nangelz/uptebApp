<?php 
    include "Conexion.php";

    class Auth extends Conexion {
        public function registrar($name,$lastname,$usuario, $email, $password, $rol) {
            $conexion = parent::conectar();

            // Insert data into the 'users' table
            $sql = "INSERT INTO users (username, user_password, user_email, role_id) 
                    VALUES (?,?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ssss', $usuario, $password, $email, $rol);
            $query->execute();

            // Get the ID of the newly inserted user
            $user_id = $conexion->insert_id;

            // Insert data into the 'info_user' table
            $sql = "INSERT INTO info_user (user_id, name_us, user_lastname) 
                    VALUES (?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('iss', $user_id, $name, $lastname);
            $query->execute();

            return true;
        }

        public function logear($usuario, $password) {
            $conexion = parent::conectar();
            $passwordExistente = "";
            $sql = "SELECT * FROM users 
                    WHERE username = '$usuario'";
            $respuesta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($respuesta) > 0) {
                $passwordExistente = mysqli_fetch_array($respuesta);
                $passwordExistente = $passwordExistente['user_password'];
                if (password_verify($password, $passwordExistente)) {
                    $sql = "SELECT role_id FROM users WHERE username = '$usuario'";
                    $respuesta = mysqli_query($conexion, $sql);
                    $role_id = mysqli_fetch_array($respuesta);
                    $role_id = $role_id['role_id'];
                    $_SESSION['username'] = $usuario;
                    $_SESSION['role_id'] = $role_id;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }   
    }

?>