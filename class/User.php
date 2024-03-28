<?php
  require_once ("../db/conect.php");
  require_once ("roles.php");

  class User Extends roles {
  
    function __construct() {
    parent::__construct();	
    }

    function add_user($username,$role,$email,$password){
    $sql= "INSERT INTO users (username,role_id,user_email,user_password) VALUES (:username,:usrole,:email,:uspassword)";
    $addUser = $this->pdo->prepare($sql);
    $addUser->bindValue(':username',$username);
    $addUser->bindValue(":usrole",$role);
    $addUser->bindValue(':email',$email);
    $addUser->bindValue(':uspassword',$password);
    $addUser->execute();   
    }

    function getId(){
     $lastId = $this->pdo->lastInsertId();    
     return $lastId;    
    }

    function add_infouser($name,$lastname){
    $lastId = $this->getId();
    $sql="INSERT INTO info_user(user_id,name_us,user_lastname) VALUES(:userid,:nameus,:lastname)";    
    $addInfo = $this->pdo->prepare($sql);
    $addInfo->bindValue(':userid',$lastId);
    $addInfo->bindValue(':nameus',$name);
    $addInfo->bindValue(':lastname',$lastname);
    $addInfo->execute();
     
    }

    function add_quest($user_id,$quest1,$quest2,$answer1,$answer2){
    $Id = $this-> getId();
    $sql="INSERT INTO security_user (user_id,quest_1,quest_2,answer_1,answer_2) VALUES (:userid,:quest1,:quest2,:answer1,:answer2)";
    $addsecurity = $this->pdo->prepare($sql);
    $addsecurity->bindValue(':userid',$lastId);
    $addsecurity->bindValue(':quest1',$quest1);
    $addsecurity->bindValue(':quest2',$quest2);
    $addsecurity->bindValue(':answer1',$answer1);
    $addsecurity->bindValue(':answer2',$answer2);
    $addsecurity->execute(); 

    }
    
    function update_Infouser(){
    $sql="UPDATE info_user SET name_us=:name, user_lastname=:lastname WHERE user_id=:id";
    $updateInfo=$this->pdo->prepare($sql);
    $updateInfo->bindValue(':name',$name);
    $updateInfo->bindValue(':lastname',$lastname);
    $updateInfo->bindValue(':id',$id);
    $updateInfo->execute();
    }

    function delete_user($id){
    $sql ="DELETE FROM users WHERE user_id=:id";    
    $deleteuser= $this->pdo->prepare($sql);
    $deleteuser->bindValue(':id',$id, PDO::PARAM_INT);
    $deleteuser->execute();
    }

    function get_user ($username){
     try {
      $sql ="SELECT user_id, username, role_id, user_password FROM users WHERE username=:username";
      $getuser= $this->pdo->prepare($sql);
      $getuser->bindValue(':username',$username);
      $getuser->execute();
      $row=$getuser->fetch(PDO::FETCH_ASSOC);
      return $row;    
     }catch(PDOException $e){
        echo "Error de conexion ".$e->getMessage();
        exit;
     }
    
    }

    function view_users(){

    $sql= "SELECT users.user_id, users.username,users.role_id,users.user_email,users.status_user, 
    info_user.infoUs_id, info_user.user_id, info_user.name_us, info_user.user_lastname, roles.role_id,
    roles.role_code, roles.role_name FROM users INNER JOIN info_user INNER JOIN roles";
    $viewus= $this->pdo->prepare($sql);
    $viewus->execute();
    $view=$viewus->fetch(PDO::FETCH_ASSOC);
    return $view;

    }
  }