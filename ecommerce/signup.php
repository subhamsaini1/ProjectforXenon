<?php
include "config.php";
if(isset($_POST['but_signup'])){
    $name = mysqli_real_escape_string($con,$_REQUEST['txt_name']);
    $uname = mysqli_real_escape_string($con,$_REQUEST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_REQUEST['txt_pwd']);

    $sql_query = "INSERT INTO users (username, name, password) VALUES ('$uname', '$name', '$password')";
    if(mysqli_query($con,$sql_query)){
      echo "Records added successfully.";
    }
    else{
      echo "ERROR: Could not able to execute $sql_query. " . mysqli_error($con);
    }
}

?>
<html>
    <head>
        <title>Sign Up</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form method="post" action="index.php">
                <div id="div_login">
                    <h1>Login</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_name" name="txt_name" placeholder="Name" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="SignUp" name="but_signup" id="but_signup" />
                        <a href="index.php" color="Blue"> <b>Already have account</b> </a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
