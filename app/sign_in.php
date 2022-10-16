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
    if(!$user || $user["password"] !== $password){
        echo"utilisateur introuvable";
    } else { 
    $_SESSION["user"] = $user;
    http_response_code(302);
    header("Location: /index.php");
    exit();
    }
}
require_once "./view/sign_in.php"
?>