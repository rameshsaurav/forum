<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "login";

$conn = mysqli_connect("$server","$user","$pass","$database");

if (!$conn){
    echo "<script>alert('Failed to connect')</script>";
    die;
}
?>