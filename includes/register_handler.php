<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $password = htmlspecialchars($_POST["password"]);
    $password = htmlspecialchars($_POST["confirm-password"]);

    header("Location: ../index.php");
} else{
    header("Location: ../register.php");
}