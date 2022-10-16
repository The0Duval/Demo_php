
<?php
require_once './pdo.php';

$postId = $_GET['id'];

$request = $pdo->prepare("SELECT * FROM `Post` WHERE `id` = :id");
$request->execute([
    'id' => $postId
]);
$post = $request->fetch(PDO::FETCH_ASSOC);
?>

<html>
<head>
    <title>Posts</title>
</head>
<body>
<h1>Posts</h1>
<h3><?= $post['postTitle'] ?></h3>
<p><?= $post['text'] ?></p>
</body>
</html>