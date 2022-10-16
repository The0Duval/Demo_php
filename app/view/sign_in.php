<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
<?php echo ""?>

<form action="sign_in.php" method="POST">
        <div >
            <div> 
             <h1>Sign_in</h1>
            </div>
            <div >
                <label for="email">E-mail :</label>
                <input  type="email" name="email" placeholder="">
            </div>
            <div >
                <label  for="password">Password :</label>
                <input  type="password"  name="password" placeholder="">
            </div>
            <div >
                <button  type="submit" id="valider" name="valider" >Valider</button>
                <button type="button" > <a href="/sign_up.php">Sign up</a></button>
            </div>
    </form>
   
</div>
</body>
</html>
   