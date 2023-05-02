<?php
require_once "../config.php";
require_once "../model/ficheModel.php";
require_once "../model/captchaModel.php";
require_once "../model/userModel.php";
require_once "../model/instrumentsModel.php";



session_start();


try {
    $db = new PDO(
        DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset='.DB_CHARSET,
        DB_USER,
        DB_PWD
    );
    // sur certains serveurs, l'affichage d'erreur est désactivé par défaut pour le driver (extension) PDO, ici on va choisir l'activation si on est en mode dev ou test, mais pas en prod (production voir config.php)
    if(ENV=="dev"||ENV=="test"){
        // activation de l'affichage des erreurs
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

}catch(Exception $e){
    die($e->getMessage());

};


//si nous sommes connectés
if(isset($_SESSION['idsession']) && $_SESSION['idsession']== session_id()){

    require_once "../controller/privateController.php" ;

}else{
    require_once "../controller/publicController.php";
}
//donneInstru($db);

