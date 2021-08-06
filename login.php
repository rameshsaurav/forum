<?php
session_start();
include("connect.php");
error_reporting(0);

if(isset($_SESSION['username'])){
    echo "<script>location.href='index.php'</script>";
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        echo "<script>alert('Login complete')</script>";
        header("Location:index.php");
    }
    else{
        echo "<script>alert('incorrect username or password')</script> ";
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
    <title>Log In</title>
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
    <section class="login-form">
        <div class="login-container">
            <form class = "form" id = "login" action="" method="POST" onsubmit = "return Validate();">
                <h1 class = "form_title">Login</h1>
                <div class = "form_message-error">
                    <p id = "msg_error">Please fill out the details</p>
                </div>
                <div class="form_input-box">
                    <input type="text" class = "form_input" id = "uname" autofocus placeholder="username" name = "username">
                </div>
                <div class="form_input-box">
                    <input type="password" class = "form_input" id = "pass" autofocus placeholder="password" name = "password">
                </div>
                <button class="form_button" name = "submit" type="submit">LOGIN</button>  
                <p class = "form_text">
                    <a href = "#" class = "form_link">Forgot username or password?</a>
                </p>
                <p class = "form_text">
                    <a href = "signup.php" class = "form_link">New user? Sign Up</a>
                </p>
            </form>
        </div>
    </section>
    <script src = "main.js">
    </script>
    
</body>
</html>