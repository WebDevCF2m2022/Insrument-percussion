<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Admin</h1>
    <a href="?disconnect">Deconnexion</a>
    <?php
    foreach($instruments as $instru):
        //var_dump($instru);
    ?>
    <form action="?update=<?=$instru['id']?>" method="post">
        <input type="text" name="nom" placeholder="nom" value="<?=$instru['nom']?>">
        <input type="text" name="resume" placeholder="resume" value="<?=$instru['resume']?>">
        <input type="text" name="description" placeholder="description"  value="<?=$instru['description']?>">
        <input type="text" name="son" placeholder="son" value="<?=$instru['son']?>">
        <input type="text" name="url" placeholder="url" value="<?=$instru['url']?>">
        <input type="hidden" name="id" value="<?=$instru['id']?>">
        <input type="submit" value="Modifier">
        <button type="text">Supprimer  <a href="?delete=<?=$instru['id']?>"></button> Supprimer</a>
    </form>

    <?php
    endforeach;
    ?>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="resume" placeholder="resume">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="son" placeholder="son">
        <input type="text" name="url" placeholder="url">
        <input type="hidden" name="categorie_id" value="1">
        <button type="text">Ajouter  <a href="?add="></button>Ajouter </a>
        </form>
</body>
</html>