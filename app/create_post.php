<?php
require_once "./pdo.php";
$request = $pdo->prepare("INSERT INTO `Post` (`postTitle`, `text`, `date`,`user_id`) VALUES (:postTitle, :text, CURRENT_TIMESTAMP ,:user_id)");
$request->execute([
    'postTitle' => $_POST['postTitle'],
    'text' => $_POST['text'],
    'id' => 1
]);
header("location : /index.php");
?>