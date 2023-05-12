<?php


//requete SQL pour recuperer les données dans la table catégorie mais seulement la catégorie ID 3 avec les instruments liés
function getInstrumentsByCategId(PDO $db, string $categName){
    $retour = $db->prepare('SELECT i.`nom`,i.`resume`,i.`url`,i.`description`,i.`son`, im.img_url FROM `instruments` i LEFT JOIN image im ON im.instruments_id = i.id INNER JOIN categorie c ON i.categorie_id = c.id WHERE c.nom_categorie = ?  ');
    try{
       $retour->execute([$categName]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($data);
    return $data;
}


 //requete sql pour recuperer les données de 'descripton' dans la table instruments
function getInstrumentDescription(PDO $db, string $categName){
    $retour = $db->prepare('SELECT i.`description` FROM `instruments` i INNER JOIN categorie c ON i.categorie_id = c.id WHERE c.nom_categorie = ?  ');
    try{
       $retour->execute([$categName]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
    var_dump($data);
    return $data;   
}

//appelez la fonction getInstrumentsByCategId() et stockez le resultat dans une variable

// récuperer tous les instruments de la table instruments
function getAllInstruments(PDO $db){
    $retour = $db->query('SELECT i.id,i.`nom`,i.`resume`,i.`url`,i.`description`,i.`son`, im.img_url FROM `instruments` i LEFT JOIN image im ON im.instruments_id = i.id');
    $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($data);
    return $data;
}
function trunCate (string $text): string{
    // fonction qui trouve un numérique qui est la dernière sous chaine dans une chaine pour remplacer $cut : " "
    $cut = strrpos($text, ' ');
    return substr ($text, 0,$cut);
}

