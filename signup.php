<?php
session_start();
include("connect.php");
error_reporting(0);

if(isset($_SESSION['username'])){
    echo "<script>location.href='index.php'</script>";
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if($password == $cpassword){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn,$sql);

        if(!$result->num_rows > 0){
            $sql = "INSERT INTO users (username,email,password)
                     VALUES ('$username','$email','$password')";
            $result  = mysqli_query($conn,$sql);
            if($result){
                echo "<script>alert('Registraion Successful')</script>";
                echo "<script>location.href='login.php'</script>";
            }
            else{
                echo "<script>alert('Something went wrong. Try again later.')</script>";
            }
        }
        else{
            echo "<script>alert('Email already Exists. Try a different one')</script>";
        }
    }
    else{
        echo "<script>alert('Passwords do not match')</script>";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7195598521.js" crossorigin="anonymous"></script>
    <title>Sign Up</title>
</head>
<body>
    <header>
        <div class = "container">
            <div id = "top">
                <a href = "index.php"><i class="fas fa-chess-rook icon logo"></i><h1>Socrates</h1></a>
            </div>
            <nav>
                <button type="button" class = "button1"><a href="login.php">Log In</a></button>
                <button type="button" class = "button2"><a href = "signup.php">Sign Up</a></button>
                <button type="button" class = "button1"><a href="logout.php">Logout</a></button>
            </nav>
        </div>
    </header>
    <!--login form-->
    <section class="signup-form">
        <div class="login-container">
            <form class = "form" id = "signup" action = "" method = "POST" onsubmit = "return Validate1();">
                <h1 class = "form_title">Sign Up</h1>
                <div class = "form_message-error">
                    <p id = "msg_error">Please fill out all the details</p>
                </div>
                <div class="form_input-box">
                    <input type="text" class = "form_input" name = "email" id = "email" autofocus placeholder="Enter Email">
                </div>
                <div class="form_input-box">
                    <input type="text" class = "form_input" name = "username" id = "uname" autofocus placeholder="Create username">
                </div>
                <div class="form_input-box">
                    <input type="password" class = "form_input" name = "password" id = "pass" autofocus placeholder="Create password">
                </div>
                <div class="form_input-box">
                    <input type="password" class = "form_input" name = "cpassword" id = "pass" autofocus placeholder="Confirm password">
                </div>
                <button class="form_button" name = "submit" type="submit">Continue</button>  
                <p class = "form_text">
                    <a href = "login.php" class = "form_link">ALredy a user ? Login</a>
                </p>
            </form>
        </div>
    </section>
    <script src = "main.js">
    </script>
    
</body>
</html>