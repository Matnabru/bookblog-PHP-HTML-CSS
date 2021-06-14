<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mateusz Urbanek Book List</title>
    <link rel="stylesheet" href="css/mainstyle.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    require_once 'admin.php';
    ?>

    <div class="top typingeffect">
        <h1>Matnabru</h1>
        <span id="txt-type" data-wait="3000" data-words='["Developer Book List","Reader Book List"]'></span>
        <div class="form">
        <?php 
        require_once 'dashboard.php';
        ?>
    </div>
    </div>
    <div class="container">
        <div class="split left">
            <h1>Nonfiction</h1>
            <a href="blog.php?ctgr=0" class="button">Browse List</a>
        </div>
        <div class="split right">
            <h1>Fiction</h1>
            <a href="blog.php?ctgr=5" class="button">Browse List</a>
        </div>
    </div>



    <script src="js/typeWriter.js"></script>
    <script src="js/split.js"></script>
    <script>
    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        
        var userName = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script>
</body>
</html>