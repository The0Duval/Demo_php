<?php

require_once "./pdo.php";
session_start();
if(!isset($_SESSION["user"])){
    header("Location: /sign_in.php");
    exit();
}

$request = $pdo->query("SELECT * FROM `Post`");

$post = $request->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sign_out.php" method="POST">
        <button type="submit">Déconnexion</button>
    </form>
    <h3>Bienvenue sur le blog d'Hétic</h3>
    <p>création d'un nouveau post</p>
    <form method="post" enctype="multipart/form-data" action="post.php">
        <label for="">Titre </label><br>
        <input type="text" name="postTitle">
        </br>
        <label id="publicationLabel" for="articleInput">Ecrit ton message</label></br>
        <textarea id="articleInput" name="text" type="text"></textarea>
        </br>
        <button type="submit" id="submitPublication" >Envoyer</button>
    </form>
    <?php if($post):
        foreach($post as $post):?>
            <div>
                <p><?= $post['first_name']?></p>
                <p><?= $post['postTitle']?></p>
                <p><?= $post['text']?></p>
                <p><?= $post['date']?></p>
            </div>
        <?php endforeach;
    else:
        echo "Pas d'articles";
    endif; ?>
</body>
</html>