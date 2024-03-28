<?php

  
require_once ("../class/User.php");
require_once("../autoload.php");
  
  try {
    $view = $users->view_users();
    foreach($view AS $row){
      return $view;
    };

  } catch (Exception $e) {
    echo "Ocurrio un Error". $e->getMessage(); 
  }
  
