<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $prenom = $_POST['first_name'];
    $nom = $_POST["last_name"];
    $email = $_POST["email"];
    $mdp = hash("sha512", $_POST["password"]);
    $confirmMdp = hash("sha512", $_POST["confirmPassword"]);
    require_once "./pdo.php";
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
        http_response_code(302);
        header("Location: /sign_in.php");
        exit();
    }
}

require_once "./view/sign_up.php"

?>