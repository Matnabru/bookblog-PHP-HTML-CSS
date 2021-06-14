<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once './view/postNF-user.php';
} else {
    require_once './view/postNF.php';
}
?>