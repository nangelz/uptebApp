<?php

  require_once ("../class/user.php");
  require_once ("../class/roles.php");
  require_once("../autoload.php");
  
  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sanity_name=$sanity->sanity($name);
  $sanity_lastname=$sanity->sanity($lastname);
  $sanity_user=$sanity->sanity($username);
  $sanity_email=$sanity->sanity($email);
  $sanity_password=$sanity->sanity($password);
  $pass=$sanity_password=$sanity->encriptar_pass($password);
  $role=1;
  try { 
  $users->add_user($sanity_user,$role,$sanity_email,$sanity_password);
  $users->add_infouser($sanity_name,$sanity_lastname);
  echo "usuario registrado";	
  } catch (Exception $e) {
    echo "Lo siento, no se pudo hacer el registro";
    echo $e;	
  }