<?php

    require_once('config.php');

    class Conect{
        protected $pdo = null;
        protected $stmt = null;

            function __construct(){
                $this->pdo = new PDO("mysql:host=". DB_HOST . ";dbname=".DB_NAME.";charset=".DB_CHARSET,DB_USER,DB_PASSWORD);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
            }

            function query($sql){
                $this->stmt = $this->pdo->prepare($sql);
                $this->stmt->execute($data);
            }

            function __destruct(){
                if ($this->stmt !== null){ $this->stmt = null;}
                if ($this->pdo !== null){ $this->pdo = null;}
            }
    }

    