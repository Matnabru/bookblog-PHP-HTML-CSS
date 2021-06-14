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

    <div class="top typingeffect">
        <h1>Matnabru</h1>
        <span id="txt-type" data-wait="3000" data-words='["Developer Book List","Reader Book List"]'></span>
        <div class="form">
        <form action="login-action.php" method="post" id="frmLogin" onSubmit="return validate();">
            <div class="demo-table">
                <?php 
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php 
                unset($_SESSION["errorMessage"]);
                } 
                ?>
                <div class="field-column">
                    <div>
                        <label for="username">Username</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="user_name" id="user_name" type="text"
                            class="demo-input-box">
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password">Password</label><span id="password_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password"
                            class="demo-input-box">
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit" name="login" value="Login"
                        class="btnlogin"></span>
                    </div>
                </div>
            </div>
        </form>
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