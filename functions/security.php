<?php

  class Security {
  	
  	function encriptar_pass($password){
    $pass = password_hash($password, PASSWORD_DEFAULT);
    return $pass;
    }

    function sanity($variable){
    $sanity = htmlentities($variable);
    return $sanity;
    }

    function fix_names($word) {
    $n1 = ucfirst(strtolower($word));
    return $n1;
    }
  }