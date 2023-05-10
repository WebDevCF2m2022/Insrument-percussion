<?php


//requete SQL pour recuperer les données dans la table catégorie mais seulement la catégorie ID 3 avec les instruments liés
function getAllCategorie(PDO $db, int $idcateg){
    $retour = $db->prepare('SELECT i.`nom`,i.`resume`,i.`url`,i.`description`,i.`son`, im.img_url FROM `instruments` i LEFT JOIN image im ON im.instruments_id = i.id WHERE i.categorie_id = ?  ');
    try{
       $retour->execute([$idcateg]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($data);
    return $data;
}

function getCategorieName(PDO $db, int $idcateg){
    $retour = $db->prepare('SELECT nom_categorie FROM categorie WHERE categorie_id = ?');
    try{
       $retour->execute([$idcateg]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($data);
    return $data;
}
