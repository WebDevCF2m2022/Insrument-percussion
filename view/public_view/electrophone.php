<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fiche.css">
    <script src="js/menuBurger.js" defer></script>
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer  src="js/lireLaSuite.js"></script>

    <title>Document</title>
</head>
<body>
    <div id="ficheGeneral">
        
    <!--header-->
    <?php include 'include/header.inc.php' ?>
    
<div id="gridFiche">
<?php
//affichez les instruments de la catégorie électrophone avec un foreach
foreach ($elec as $key => $value): 
   // echo $value['nom'];
    //echo $value['resume'];
    //echo $value['url'];
    //echo $value['description'];
    //echo $value['son'];
    //echo $value['img_url'];
    

?>
    <div class="fiche">
    <div class="imgWrapper">
        <img class="imgFiche" src="<?=$value['img_url']?>" alt="<?=$value['nom']?>" width="150px">
    </div>
    <div class="contentWrapper">
        <h1 class="nomFiche"><?=$value['nom'];?></h1>
        <h5 class="resumeFiche"><?=$value['resume'];?></h5>
        <div class="hiddenInfo" style="display:none;">
            </br><p class="pFiche"><?=$value['description'];?></p>
            <p class="pFiche"><a href="<?=$value['url'];?>" target="_blank">Lien vers Wikipédia</a></p>
            <?php if($value['son'] != null): ?>
                <audio controls>
                    <source src="<?= $value['son']; ?>" type="audio/mp3">
                </audio>
            <?php endif; ?>
            <button class="fermerInfo">Fermer</button>
        </div>
    </div>
    <div class="moreInfo">
        <a href="#" class="plusInfo">Lire la suite..</a>
    </div>
</div>

<?php endforeach; ?>
</div>
<?php include 'include/footer.inc.php' ?>
</div>
</body>
</html>

