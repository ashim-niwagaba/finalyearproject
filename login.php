<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <style>
        *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    background:#fff;
}
h1{
    text-align: center;
    margin-bottom: 10px;
    font-family: sans-serif;
}
.login_box{
    width: 300px;
    position: absolute;
    top:30%;
    left: 40%;
    background: #fff;
}
@media screen and (max-width: 677px){
    .login_box{
        width: 100%;
        position: absolute;
        left: 0%;
        top: 10%;
    }
}
.textbox input{
    width: 100%;
    margin-bottom: 10px;
    height: 40px;
    border: 2px #4682b4 solid;
    border-radius: 40px;
    text-align: center;
    font-size: 19px;


}
.btn_btn{
    width: 100%;
    margin: 15px auto;
    height: 39px;
    background: blue;
    font-size: 20px;
    font-family: sans-serif;
    border: 1px blue solid;
    border-radius: 40px;
    font-weight: bold;
}
.logo{
    width: 90px;
    height: 90px;
   
}
.btn_btn:hover{
    cursor: pointer;
    background-color: rgb(61, 61, 133);
    transition: .1s ease-in-out;
}
    </style>
</head>
<body>
    <div class="login_box">
       
       <center><p style="color:#ff1b68;"></p></center>
       <center><img src="assets/logo.jpg" alt="logo" class="logo"></center>
        <center><h2>Please Login</h2></center>
        <form action="includes/login.inc.php" method="POST">
        <div class="textbox">
            <input type="email" name="email" placeholder="Username" required>
        </div>
        <div class="textbox">
            <input type="password" name="password" placeholder="Password..." required>
        </div>
        
        <center><input type="checkbox" value="" style="display: inline-block; " width="10"><p style="display: inline-block;">Remember me</p><br></center>
        <button class="btn_btn" type="submit" name=login-submit>Login</button><br>
    </form>
        <center><p>Don't have an account yet?<a href="signup.php">Sign up</a></p></center><br>
        <center><a href="index.php">Home Page</a></center>
        <center><p>&copy; copyright 2022</p></center>
    </div>
</body>
</html>