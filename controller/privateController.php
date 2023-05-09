<?php
#var_dump($_SESSION);

global $db;
if (isset($_GET['disconnect'])){
    if(deconnect()){
        header('Location: ./');
        die();
    }
}elseif (isset($_GET['update'])){

    $instru = updateInstrument($db, $_POST['nom'], $_POST['resume'], $_POST['description'], $_POST['son'], $_POST['url'], $_POST['id']);
    header('Location: ./');
    die();

}else{
    // on récupére les données de la table instruments
    $instruments = getAllInstruments($db);
    include_once "../view/private_view/adminView.php";
}

