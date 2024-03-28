<?php
  require_once ("session.php");
  require_once ("User.php");

  class security_us extends User {
     protected $users;

    function __construct() {
    parent::__construct();	
    }

    function login($user,$password){
      $users=$this->get_user($user);
      
      if ($users !== FALSE) {
       $row = $users;
       $dbuser = $row['username'];
       $id = $row['user_id'];  
       $dbrole = $row['role_id'];
       $dbpassword = $row['user_password'];

       if (password_verify($password, $dbpassword)) {
          session_start();
          $session = new SessionManager($dbuser,$id,$dbrole);
           $_SESSION["logged"]=TRUE;
           $_SESSION["username"]=$dbuser;
           $_SESSION["userId"]=$id;
           echo 'Valor de la sesión "username": ' . $session->getSessionValue('username');
           header("Location: ../view/dashboard.php");
           return TRUE;
        } else{
            echo "Contraseña incorrecta.";
            return FALSE;
         }
        }else {
        echo "Usuario no registrado";
      }
    }
    
    function attemps_limit($username){
      $attemps=$this->getAttemps($username);
      $limit = 3;
      $attemp = 0;

      if ($attemps == $limit) {
      echo "Limite de intentos alcanzado, contactar al Administrador";
      }
      else {
        $attemp++ ;
        $attmp = $this->setAttemp($id);
      }
    }

    function getAttemps($username){
    $sql="SELECT attemp FROM security_user sur JOIN users us ON us.user_id=sur.user_id WHERE username=:username"; 
    $get=$this->pdo->prepare($sql);
    $get->bindValue(":username",$username);
    $get->execute();
    return $get;  
    }

    function setAttemps($id){
    $sql="UPDATE security_user SET attemp=:attemp WHERE user_id=:id";
    $setAttemp=$this->pdo->prepare($sql);
    $setAttemp->bindValue(":id",$id);
    $setAttemp->execute();
    return $setAttemp;  
    }   
  }