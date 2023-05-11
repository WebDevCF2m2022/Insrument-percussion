<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="resume" placeholder="resume">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="son" placeholder="son">
        <input type="text" name="url" placeholder="url">
        <select name="categorie_id">

        <?php
        foreach ($dataCateg as $categorie):
        ?>
        <option value="<?=$categorie['id']?>"><?=$categorie['nom_categorie']?></option>


        <?php
         endforeach;
        ?>
        </select></br>
        <input type="file" size="32" name="image_field" value="">
       <button type="submit">Ajouter</button>
    </form>

</body>
</html>
