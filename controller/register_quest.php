<?php

  require_once ("../class/User.php");
  require_once ("../class/roles.php");
  require_once("../autoload.php");
  

  $quest1= $_POST['quest1'];
  $quest2= $_POST['quest2'];
  $answer1= $_POST['answer1'];
  $answer2= $_POST['answer2'];
  $id= session_id();

  $sanity_answer1=$sanity->sanity($answer1);
  $sanity_answer2=$sanity->sanity($answer2);

  echo " este es el".$id;

//   try { 

//   $users->add_quest($quest1,$quest2,$sanity_answer1,$sanity_answer2);
//   echo "preguntas registrada";	
//   } catch (Exception $e) {
//     echo "Lo siento, no se pudo hacer el registro";	
//   }