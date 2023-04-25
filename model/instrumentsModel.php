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

