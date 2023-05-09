<?php
//fonction pour mettre à jour un instrument dans la DB
function updateInstrument(PDO $db, $nom, string $resume, string $description, string $son, string $url, $id){
    $retour = $db->prepare('UPDATE instruments SET nom = ?, resume = ?, description = ?, son = ?, url = ? WHERE id = ?');
    try{
        $retour->execute([$nom, $resume, $description, $son, $url, $id]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    return $retour->rowCount();
}
