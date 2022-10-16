<?php
require_once "./pdo.php";
$message ="";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $prenom = $_POST['first_name'];
    $nom = $_POST["last_name"];
    $email = $_POST["email"];
    $mdp = hash("sha512", $_POST["password"]);
    $confirmMdp = hash("sha512", $_POST["confirmPassword"]);
     
    $maRequete = $pdo->prepare("SELECT `email` FROM `User` WHERE `email` = :email;");
    $maRequete->execute([
        ":email"=> $email
    ]);
    $user = $maRequete->fetch();


    if ($user == false && strcmp($mdp, $confirmMdp) == 0) {
        $maRequete = $pdo->prepare("INSERT INTO `User` (`first_name`, `last_name`,`email`, `password`) VALUES(:first_name, :last_name, :email, :mdp)");
        $maRequete->execute([
            ":first_name" => $prenom,
            ":last_name" => $nom,
            ":email" => $email,
            ":mdp" => $mdp
        ]);
    }else{
        $message = "Les mots de passe ne correspondent pas";
        require_once "./view/sign_up.php";
    }
}

require_once "./view/sign_up.php"

?>