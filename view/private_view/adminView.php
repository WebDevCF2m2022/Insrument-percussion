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
    <a href="?insert">Ajouter un article</a>
    <br>
    <br><style>
    table, th, td {
         border: 2px solid black; border-collapse: collapse; 
         } 
         th, td { 
            padding: 5px; } 

            h1{
                text-align: center;
            }
            a{
            text-decoration: none;
            padding: 5px;
            }
            </style>
            <table>
            <thead> 
                <tr> 
                    <th>ID</th>
                     <th>Resumer</th> 
                     <th>Description</th> 
                     <th>Son</th> 
                     <th>Url</th> 
                     <th>Numero</th> 
                     <th>Supprimer</th> 
                    </tr>
             </thead><tbody>
    
    <?php
    foreach($instruments as $instru):
        // var_dump($instru);
    ?>
    <tr> 
        <td><?=$instru['nom']?></td> 
        <td><?=trunCate(substr($instru['description'],0,200))?></td> 
        <td><?= trunCate(substr($instru['description'],0,200))?></td> 
        <td><?=$instru['son']?></td> <td><?=$instru['url']?></td> 
        <td><?=$instru['id']?></td> 
        <td><a href="?delete=<?=$instru['id']?>">Supprimer</td> 
        </tr>
        <form action="?update=<?=$instru['id']?>" method="post"> 
        <td><input type="text" name="nom" placeholder="nom" value="<?=$instru['nom']?>"></td> 
        <td> <input type="text" name="resume" placeholder="resume" value="<?=$instru['resume']?>"></td> 
        <td> <input type="text" name="description" placeholder="description" value="<?=$instru['description']?>"></td> 
        <td> <input type="text" name="son" placeholder="son" value="<?=$instru['son']?>"></td> 
        <td> <input type="text" name="url" placeholder="url" value="<?=$instru['url']?>"></td> 
        <td> <input type="hidden" name="id" value="<?=$instru['id']?>"></td> 
        <td> <input type="submit" value="Modifier"></td> 
    </form> 

    
    

    <?php
    endforeach;
    ?>
    </table>
    </tbody>
</body>
</html>