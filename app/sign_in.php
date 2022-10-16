<?php
session_start(); 
require_once "./pdo.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"]; 
    $mdp = hash("sha512",$_POST["password"]);

    $maRequete = $pdo->prepare("SELECT * FROM `User` WHERE `email`=:email");
    $maRequete->execute([
        ":email" => $email,
    ]);
    $user = $maRequete->fetch();
    $_SESSION["user"] = $user;
    header("location : /index.php");
    exit();
}
require_once "./view/sign_in.php"
?>