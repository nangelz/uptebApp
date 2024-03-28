<?php

require_once("db/conect.php");
require_once("functions/security.php");
require_once("class/User.php");
require_once("class/security.php");
require_once("class/session.php");
require_once("functions/logout.php");

$conexion = new Conect();
$sanity = new Security();
$users = new User();
$security = new security_us();
$session =  new SessionManager();
$logout = new logout();



