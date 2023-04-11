<?php
require_once "../config.php";
require_once "../model/ficheModel.php";
require_once "../controller/publicController.php";


try {
    $db = new PDO(
        DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset='.DB_CHARSET,
        DB_USER,
        DB_PWD
    );
   
    if(ENV=="dev"||ENV=="test"){
      
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

}catch(Exception $e){
    die($e->getMessage());

};



