<?php 
  
  require_once ("security.php");

  class forgot extends security_us {
  	
  	function __construct()
  	{
  	   parent:: __construct();
  	}

  	function getUs($user){
     $sql = "SELECT username FROM users WHERE username=:username";
     $us = $this->pdo->prepare($sql);
     $us->bindValue(":username",$user);
     $us->execute();
     return $us;
  	}

  	function getQuestions($user){
  	$sql = "SELECT quest_1,quest_2, answer_1, answer_2 FROM security_user sur JOIN users us ON us.user_id=sur.user_id WHERE username";
    $us=$this->pdo->prepare($sql);
    $us->bindValue(":username",$user);
    $us->execute();
    return $us->fetch(PDO::FETCH_ASSOC);	
  	}

  	function forgot_pass($user,$answer,$password){
    $getus = $this->getUs($user);

      if ($getus >= 1) {
        $question= $this->getQuestions($user);
        $quest1 = $row['quest_1'];
        $quest2 = $row['quest_2'];
        $answer1= $row['answer_1'];
        $answer2= $row['answer_2'];
        $sort= $this->sortQuest($quest1,$quest2);
        $verify=$this->verifyAnswer($sort,$answer);

        if (count($verify)== 1) {
        	$reset=$this->reset_pass($user,$password);
        	echo "Contraseña cambianda, puede iniciar sesion";
        } else {
            echo "lo siento, no se puede cambiar la contraseña";	
        }
      }
      else {
        echo "usuario no registrado";
      }
    }

    function reset_pass($username,$password){
    $sql = "UPDATE users SET user_password=:uspassword WHERE username=:username";
    $reset= $this->pdo->prepare($sql);
    $reset->bindValue(":uspassword",$password);
    $reset->bindValue(":username",$username);
    $reset->execute();
    return $reset;
    }

    function verifyAnswer($answer,$reply,$user){
      if ($answer === $reply) {
      echo "respuesta correcta";
      } else {
        echo "Respuesta incorrecta, intentelo de nuevo";
        $attemp= $this->attemps_limit($user); 
      }
    }

    function sortQuest($quest1,$quest2){
    $ask= array($quest1,$quest2);
    shuffle($ask);
    return $ask;
    }

}