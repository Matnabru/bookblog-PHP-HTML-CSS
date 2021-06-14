<?php
require_once "./class/Post.php";

    error_reporting(0);
    require_once __DIR__ . './../class/Post.php';
    $postList = new Post();
    // Every post
    $postResult = $postList->getEveryPost();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./css/blogstyle.css">
</head>
<body>

    <?php
    require_once 'header.php';
    foreach($postResult as $value) {
        
        if($value["cat_id"] == $_GET["ctgr"]){
            echo'<div class="article"><div class="line">
                <img src='.$value["imglink"].'>
                <h1><a href=./article.php?id='.$value["id"].'>'
                . $value["title"] .
                "</a></h1></div><div class='linecontent'><a class=\"date\">DATE READ : "
                . substr($value["publication_date"],0,10). 
                ".</a><a class='recomendation'>  HOW STRONGLY I RECCOMEND IT : "
                . $value["recomendation"].
                "/10</a><a class='summary'>"
                . $value["summary"].
                "</a></div></div>";
        }
        else if($_GET["ctgr"]==0){
            echo'<div class="article"><div class="line">
                <img src='.$value["imglink"].'>
                <h1><a href=./article.php?id='.$value["id"].'>'
                . $value["title"] .
                "</a></h1></div><div class='linecontent'><a class=\"date\">DATE READ : "
                . substr($value["publication_date"],0,10). 
                ".</a><a class='recomendation'>  HOW STRONGLY I RECCOMEND IT : "
                . $value["recomendation"].
                "/10</a><a class='summary'>"
                . $value["summary"].
                "</a></div></div>";
        }
      }
    
    ?>
</body>
</html>