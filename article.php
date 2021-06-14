<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once './view/article-user.php';
} else {
    require_once './view/article.php';
}
?>