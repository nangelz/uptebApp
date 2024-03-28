<?php 

  require_once ("../db/conect.php");

  // class Session extends Conect
  // {
  	
  // 	function __construct(argument)
  // 	{
  // 	   parent:: __construct();
  // 	}

  // 	function logIn(){
  // 	  if(!isset($_SESSION)){
  //       session_start();
  //     }	
  // 	}

  // 	function seteoSession($user){
  //     $_SESSION["id"]=$user["user_id"] 
  //     $_SESSION["username"]=$user["username"];
  //     $_SESSION["role"]= $user["role_id"];

  // 	}
  // }

class SessionManager {
    public function __construct() {
        // Inicializar la sesión si aún no está iniciada
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function createSession($key, $value) {
        // Crear una variable de sesión con el nombre $key y asignarle el valor $value
        $_SESSION[$key] = $value;
    }

    public function getSessionValue($key) {
        // Obtener el valor de la variable de sesión con el nombre $key
        return $_SESSION[$key] ?? null;
    }

    public function setSessionValue($key, $value) {
        // Actualizar el valor de la variable de sesión con el nombre $key
        $_SESSION[$key] = $value;
    }

    public function deleteSessionValue($key) {
        // Eliminar la variable de sesión con el nombre $key
        unset($_SESSION[$key]);
    }

    public function destroySession() {
        // Destruir completamente la sesión
        session_unset();
        session_destroy();
    }
    
}

// Ejemplo de uso:
// $sessionManager = new SessionManager();
// $sessionManager->createSession('username', 'john_doe');
// echo 'Valor de la sesión "username": ' . $sessionManager->getSessionValue('username');
// $sessionManager->setSessionValue('user_role', 'admin');
// $sessionManager->deleteSessionValue('user_role');
// $sessionManager->destroySession();
?>
