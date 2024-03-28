<?php 
  
  require_once("../db/conect.php");

  class roles extends Conect {
  protected $roleId;
  protected $code;
  protected $name;
  protected $descripcion;

    function __construct(){
    parent:: __construct();	
    }

    function addRole(){
    $sql= "INSERT INTO roles (role_code,role_name,role_descripcion) VALUES (:code,:name,:descripcion)";
    $addrole = $this->pdo->prepare($sql);
    $addrole->bindValue(':code',$this->code);
    $addrole->bindValue(':name',$this->name);
    $addrole->bindValue(':descripcion',$this->descripcion);
    $addrole->execute();			
    }	

    function updateRole(){
    $sql = "UPDATE roles SET role_code=:rolecode, role_name=:rolename,role_descripcion=:roledescrip WHERE role_id=:idrole";
    $updaterole = $this->pdo->prepare($sql);
    $updaterole->bindValue(':rolecode',$this->code);
    $updaterole->bindValue(':rolename',$this->name);
    $updaterole->bindValue(':roledescrip',$this->descripcion);
    $updaterole->bindValue(':idrole',$this->roleId);
    $updaterole->execute();	
    }

    function deleteRole(){
    $sql ="DELETE FROM roles WHERE role_id=:idrole";    
    $deleterole= $this->pdo->prepare($sql);
    $deleterole->bindValue(':idrole',$this->roleId);
    $deleterole->execute(); 	
    }

    function getRoles(){
    $sql= "SELECT * FROM roles";  
    $this->query($sql); 	
    }

  }