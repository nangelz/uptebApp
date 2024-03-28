<?php

  require_once ("../class/User.php");
  require_once("../autoload.php");
  
  $username = $_POST["username"];
  $password = $_POST["password"];


  $sanity->sanity($username);
  $sanity->sanity($password);
  $sanity->encriptar_pass($password);

  $security->login($username,$password);

