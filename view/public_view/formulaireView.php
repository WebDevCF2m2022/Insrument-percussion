<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
      <?php include 'include/header.inc.php' ?>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login</h3>
            <input type="email" name="usermail" placeholder="Entrez votre mail" class="box" required>
            <input type="password" name="userpassword" placeholder="Entrez votre mot de passe" class="box" required>
            <input type="submit" name="submit" value="Se connecter" class="form-btn">
            <p>Vous n'avez pas de compte ? <a href="?page=register">Enregistre toi maintenant !</a></p>
            
           
        </form>
    </div>
    <?php include 'include/footer.inc.php' ?>
</body>
</html>