<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<style>
    table, th, td {
         border: 2px solid black; border-collapse: collapse; 
         } 
         th, td { 
            padding: 25px; } 
            button{
                position: relative;
                top: 190px;
            }
            </style>
<body>
    <table>
    <thead> 
                <tr> 
                    <th>Nom</th>
                     <th>Resume</th> 
                     <th>Description</th> 
                     <th>Son</th> 
                     <th>Url</th>
                     <th>Fichier</th>  
                    </tr>
             </thead><tbody>
 


    <form action="" method="post" enctype="multipart/form-data">
        <td><input type="text" name="nom" placeholder="nom"></td>
        <td><input type="text" name="resume" placeholder="resume"></td>
        <td><input type="text" name="description" placeholder="description"></td>
        <td><input type="text" name="son" placeholder="son"></td>
        <td><input type="text" name="url" placeholder="url"></td>
        <select name="categorie_id">

        <?php
        foreach ($dataCateg as $categorie):
        ?>
       
       <option value="<?=$categorie['id']?>"><?=$categorie['nom_categorie']?></option>


        <?php
         endforeach;
        ?>
        </select></br>
        <td><input type="file" size="32" name="image_field" value=""></td>
       <button type="submit">Ajouter</button>
    </form>
    </table>
    </tbody>

</body>
</html>
