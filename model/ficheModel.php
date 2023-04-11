<?php
//requete sql pour récupérer données dans la table instruments et image liée
$db = new PDO(
    DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset='.DB_CHARSET,
    DB_USER,
    DB_PWD
);

function donneInstru($db){

$retour = $db->query('SELECT `nom`,`resume`,`url`,`description`,`son`,`copy_son`,`img_url` FROM `instruments` LEFT JOIN image ON instruments.image_id = image.id');

 $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
//var_dump($data); a enlever de commentaire pour voir que ça fonctionne
return $data;
}
