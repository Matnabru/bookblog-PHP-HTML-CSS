<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once './view/login-user.php';
} else {
    require_once './view/login.php';
}
?>