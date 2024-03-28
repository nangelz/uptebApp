<?php

require_once("../autoload.php");
require_once("../class/session.php");

if ($_SESSION["logged"]) {
    $session->destroySession();
    $logout->logout();
}
