<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <?= $message ?>
    <div>
        <h1>Création d'un compte</h1>
        <form action="" method="POST">
            <div>
                <label for="first_name"> Nom </label>
                <input type="text" name="first_name" id="">
            </div>
            <div>
                <label for="last_name"> Prénom </label>
                <input type="text" name="last_name" id="">
            </div>
            <div>
                <label for="email"> Email </label>
                <input type="text" name="email" id="">
            </div>
            <div>
                <label for="password"> Mot de passe </label>
                <input type="text" name="password" id="">
            </div>
            <div>
                <label for="password"> Confirmation du mot de passe </label>
                <input type="text" name="confirmPassword" id="">
            </div>
            <div>
                <input type="submit" value="Connection">
            </div>
        </form>
    </div>
</body>
</html>
