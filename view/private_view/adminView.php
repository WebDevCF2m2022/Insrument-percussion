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
    <a href="?disconnect">Logout</a>
    <?php
    foreach($instruments as $instru):
    ?>
    <form action="?update=<?=$instru['id']?>" method="post">
        <input type="text" name="nom" placeholder="nom" value="<?=$instru['nom']?>">
        <input type="text" name="resume" placeholder="resume">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="son" placeholder="son">
        <input type="text" name="url" placeholder="url">
        <input type="hidden" name="id">
        <input type="submit" value="Modifier">
    </form>
    <?php
    endforeach;
    ?>

</body>
</html>