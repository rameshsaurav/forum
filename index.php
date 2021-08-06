<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>location.href='login.php'</script>";
}
setcookie('username',$_SESSION['username'], time() + 3600);
$uname = $_COOKIE['username'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7195598521.js" crossorigin="anonymous"></script>
    <title>Forum</title>
</head>
<body>
    <header>
        <div class = "container">
            <div id = "top">
                <a href = "index.php"><i class="fas fa-chess-rook icon logo"></i><h1>Socrates</h1></a>
            </div>
            <nav>
                <span class = "welcome-text">Welcome <?php  echo $uname ?> </span>
                <button type="button" class = "button1"><a href="login.html">Log In</a></button>
                <button type="button" class = "button2"><a href = "signup.html">Sign Up</a></button>
                <button type="button" class = "button1"><a href="logout.php">Logout</a></button>

            </nav>
        </div>
    </header>
    <section>
        <div class="contianer">
            <nav class = "menu">
                <ul>
                    <li class = "current">
                        <a href = "index.php">Home</a>
                    </li>
                    <li>
                        <a href = "index.php">Forums</a>
                    </li>
    
                    <li>
                        <a href = "about.html">About</a>
                    </li>
                </ul>
            </nav>
        </div>

    </section>

    <section>
        <div class = "container">
            <div class = "forum-title">
                <h1>Forum</h1>
            </div>
            <div class = "forum-box">
                <div class = "forum-stats">
                    <a href = "" id = "nposts">50 posts</a>
                </div>
                <div class = "subforum-title">
                    <i class="fas fa-comments" id = "comments"></i>
                    <a href = ""><h1>General</h1></a>
                </div>
                <div class = "description">
                    <p> A general subforum where you can view posts of any topic. Check out our subforums as well.</p>
                </div>
                <div class = "forum-stats">
                    Last updated by: <a href = "">User1</a> | 3 minutes ago
                </div> 
            </div>

            <div class = "forum-box">
                <div class = "forum-stats">
                    <a href = "" id = "nposts">20 posts</a>
                </div>
                <div class = "subforum-title">
                    <i class="fas fa-globe" id = "world"></i>
                    <a href = "worldnews.html"><h1>World News</h1></a> 
                </div>
                <div class = "description">
                    <p>A Place for major news around the world.</p>
                </div>
                <div class = "forum-stats">
                    Last updated by: <a href = "">User1</a>| 5 minutes ago
                </div> 
            </div>

            <div class = "forum-box">
                <div class = "forum-stats">
                    <a href = "" id="nposts">30 posts</a>
                </div> 
                <div class = "subforum-title">
                    <i class="fas fa-microchip" id = "tech"></i>
                    <a href = "tech.html"><h1>Technology</h1></a>
                </div>
                <div class = "description">
                    <p>A subforum dedicated to discussion around Technology.</p>
                </div>
                <div class = "forum-stats">
                    Last updated by: <a href = "">User1</a> | 1 hour ago
                </div> 
            </div>
        </div>
    </section>
    <footer>
        <p>Socrates ,Copyright &copy; 2021 </p>
    </footer>
    <script src="main.js"></script>
</body>
</html>
<?php

?>