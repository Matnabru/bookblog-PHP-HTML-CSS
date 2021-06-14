<?php
require_once "./class/Post.php";

    require_once __DIR__ . './../class/Post.php';
    $postList = new Post();
    $postResult = $postList->getPostById($_GET["id"]);

    $value = $postResult[0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/blogstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
    require_once 'admin.php';
 require_once 'header.php';
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
        "</a>"
        . $value["content"].
        "</div>";

 echo '<div class="btn"><a>Edit</a></div>';
?>
</body>
</html>